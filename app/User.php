<?php

namespace App;

<<<<<<< HEAD
use Laravel\Cashier\Billable;
use Laravel\Spark\Teams\CanJoinTeams;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as BaseUser;
use Laravel\Spark\Auth\TwoFactor\Authenticatable as TwoFactorAuthenticatable;
use Laravel\Spark\Contracts\Auth\TwoFactor\Authenticatable as TwoFactorAuthenticatableContract;

class User extends BaseUser implements TwoFactorAuthenticatableContract
{
    use Billable, TwoFactorAuthenticatable;

=======
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'email',
        'name',
        'password',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'using_two_factor_auth'
=======
        'name', 'email', 'password',
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
<<<<<<< HEAD
        'card_brand',
        'card_last_four',
        'extra_billing_info',
        'password',
        'remember_token',
        'stripe_id',
        'stripe_subscription',
        'two_factor_options',
=======
        'password', 'remember_token',
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
    ];
}
