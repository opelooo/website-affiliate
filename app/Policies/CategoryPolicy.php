<?php

namespace App\Policies;

use App\Models\Akun_admin;
use App\Models\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Akun_admin $akunAdmin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Akun_admin $akunAdmin, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Akun_admin $akunAdmin)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Akun_admin $akunAdmin, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Akun_admin $akunAdmin, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Akun_admin $akunAdmin, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Akun_admin  $akunAdmin
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Akun_admin $akunAdmin, Category $category)
    {
        //
    }
}
