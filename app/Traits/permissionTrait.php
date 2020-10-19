<?php

namespace App\Traits;

trait permissionTrait{
    public function hasPermission()
    {
        //for Departments
        if (!isset(auth()->user()->role->permission['name']['department']['can-add']) && \Route::is('department.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['department']['can-list']) && \Route::is('department.index')){
            return abort(401);
        }

        //for Roles
        if (!isset(auth()->user()->role->permission['name']['role']['can-add']) && \Route::is('role.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['role']['can-list']) && \Route::is('role.index')){
            return abort(401);
        }

        //for Users
        if (!isset(auth()->user()->role->permission['name']['user']['can-add']) && \Route::is('users.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['user']['can-list']) && \Route::is('users.index')){
            return abort(401);
        }

        //for Users
        if (!isset(auth()->user()->role->permission['name']['notice']['can-add']) && \Route::is('notices.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['notice']['can-list']) && \Route::is('notices.index')){
            return abort(401);
        }

        //for Project
        if (!isset(auth()->user()->role->permission['name']['project']['can-add']) && \Route::is('projects.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['project']['can-list']) && \Route::is('projects.index')){
            return abort(401);
        }

        //for Requisition
        if (!isset(auth()->user()->role->permission['name']['requisition']['can-add']) && \Route::is('requisitions.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['requisition']['can-list']) && \Route::is('requisitions.index')){
            return abort(401);
        }

        //for Permissions
        if (!isset(auth()->user()->role->permission['name']['permission']['can-add']) && \Route::is('permissions.create')){
            return abort(401);
        }
        if (!isset(auth()->user()->role->permission['name']['permission']['can-list']) && \Route::is('permissions.index')){
            return abort(401);
        }

        //for leave
        if (!isset(auth()->user()->role->permission['name']['leave']['can-list']) && \Route::is('leaves.index')){
            return abort(401);
        }
    }
}
