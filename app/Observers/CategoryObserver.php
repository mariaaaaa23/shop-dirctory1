<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        session()->flash('success', "دسته بندی {$category->title} با موفقیت ایجاد شد");
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        session()->flash('success', "دسته بندی {$category->title} با موفقیت وبرایش شد");
        
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        session()->flash('success', "دسته بندی {$category->title} با موفقیت حذف شد");
        
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}
