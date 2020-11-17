<?php namespace App\Helpers;

use Config\Services;
use Myth\Auth\Authentication\LocalAuthenticator;
use Myth\Auth\Entities\User;

class Auth {
	/**
	 * Checks to see if the user is logged in.
	 *
	 * @return bool
	 */
	public static function logged_in()
	{
		return Services::authentication()->check();
	}

	/**
	 * Returns the User instance for the current logged in user.
	 *
	 * 
	 */
	public static function user() : ?User
	{
		$authenticate = Services::authentication();
		$authenticate->check();
		return $authenticate->user();
	}

	/**
	 * @return int|null
	 */
	public static function user_id() 
	{
		/** @var LocalAuthenticator */
		$authenticate = Services::authentication();
		$authenticate->check();
		return $authenticate->id();
	}

	/**
	 * Ensures that the current user is in at least one of the passed in
	 * groups. The groups can be passed in as either ID's or group names.
	 * You can pass either a single item or an array of items.
	 *
	 * Example:
	 *  in_groups([1, 2, 3]);
	 *  in_groups(14);
	 *  in_groups('admins');
	 *  in_groups( ['admins', 'moderators'] );
	 *
	 * @param mixed  $groups
	 *
	 * @return bool
	 */
	public static function in_groups($groups): bool
	{
		$authenticate = Services::authentication();
        $authorize    = Services::authorization();

        if ($authenticate->check())
        {
            return $authorize->inGroup($groups, $authenticate->id());
        }

        return false;
	}


	/**
	 * Ensures that the current user has the passed in permission.
	 * The permission can be passed in either as an ID or name.
	 *
	 * @param int|string $permission
	 *
	 * @return bool
	 */
	public static function has_permission($permission): bool
	{
		$authenticate = Services::authentication();
        $authorize    = Services::authorization();

        if ($authenticate->check())
        {
            return $authorize->hasPermission($permission, $authenticate->id()) ?? false;
        }

        return false;
	}
}