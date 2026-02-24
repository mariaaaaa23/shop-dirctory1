<?php

namespace App\Observers;

use App\Models\City;

class CityObserver
{
    /**
     * Handle the City "created" event.
     */
    public function created(City $city): void
    {
        session()->flash('success',"شهر {$city->name} با موفقیت ایجاد شد");
    }

    /**
     * Handle the City "updated" event.
     */
    public function updated(City $city): void
    {
        session()->flash('success',"شهر {$city->name} با ویرایش ایجاد شد");
    }

    /**
     * Handle the City "deleted" event.
     */
    public function deleted(City $city): void
    {
        session()->flash('success',"شهر {$city->name} با حذف ایجاد شد");
    }

    /**
     * Handle the City "restored" event.
     */
    public function restored(City $city): void
    {
        //
    }

    /**
     * Handle the City "force deleted" event.
     */
    public function forceDeleted(City $city): void
    {
        //
    }
}
