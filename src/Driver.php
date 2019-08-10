<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'profile_photo',
        'transport_mode',
        'driver_type',
        'fixed_commission',
        'commission_percent',
        'licence_file',
        'licence_expiration_date',
        'availability',
        'account_status',
        'last_active',
        'pushy_device_token',
    ];

    public function vendors()
    {
        return $this->hasMany(VendorDriver::class);
    }
	
	public function changeAvailability($id, $availability)
	{
		Driver::find($id)->update(['availability' => $availability]);
	}

    public function locations()
    {
        return $this->hasMany(DriverLocation::class);
    }
	
}
