<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;

interface RoleRepositoryInterface
{
  public function getInstance();

  public function all();

  public function store(Request $request);

  public function update($id, Request $request);

  public function delete($id);

  public function find($id);
}