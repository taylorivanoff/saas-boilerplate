<?php

namespace Template\Http\Admin\Controllers\User;

use Template\Domain\Users\Models\Role;
use Illuminate\Http\Request;
use Template\App\Controllers\Controller;

class RoleStatusController extends Controller
{
    /**
     * Update the specified resource status in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Template\Domain\Users\Models\Role $role
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function toggleStatus(Request $request, Role $role)
    {
        $this->authorize('update', $role);

        $role->fill([
            'usable' => $role->usable == true ? false : true
        ]);

        $role->save();

        return back()->withSuccess("{$role->name} status updated successfully.");
    }
}
