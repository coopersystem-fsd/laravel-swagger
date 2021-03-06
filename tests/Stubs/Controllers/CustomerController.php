<?php

namespace Mtrajano\LaravelSwagger\Tests\Stubs\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;
use Mtrajano\LaravelSwagger\Tests\Stubs\Requests\StoreCustomerRequest;
use Mtrajano\LaravelSwagger\Tests\Stubs\Requests\UpdateCustomerRequest;

/**
 * Class CustomerController
 * @package Mtrajano\LaravelSwagger\Tests\Stubs\Controllers
 * @model Mtrajano\LaravelSwagger\Tests\Stubs\Models\Customer
 */
class CustomerController extends Controller
{
    public function index()
    {

    }

    /**
     * Store new customer.
     *
     * @param StoreCustomerRequest $request
     */
    public function store(StoreCustomerRequest $request)
    {

    }

    /**
     * Update customer data.
     *
     * Find customer by id and update it from data received from request.
     *
     * @param int $id
     * @param UpdateCustomerRequest $request
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @throws \Illuminate\Auth\AuthenticationException
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(int $id, UpdateCustomerRequest $request)
    {

    }

    /**
     * @param int $id
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function destroy(int $id)
    {

    }

    public function show(int $id)
    {

    }

    /**
     * @model InvalidAppends
     */
    public function invalidAppends()
    {

    }
}

class InvalidAppends extends Model
{
    public function getAppends()
    {
        return 'test';
    }
}