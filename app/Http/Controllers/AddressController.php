<?php
/**
 * Created by PhpStorm.
 * User: texte
 * Date: 15/03/2018
 * Time: 16:29
 */

namespace App\Http\Controllers;

use App\Http\Services\AddressService;

/**
 * This Class is responsible for managing all addresses stored in mikrotik
 *
 *
 *
 * @package App\Http\Controllers
 * @author This code was developed by Atos Vinicius, under the service of MF Info
 * @version initial
 */
class AddressController extends Controller
{
    /**
     * this method returns all registered addresses in mikrotik
     *
     *
     *
     * @return array returns all records
     * @access public
     */
    public function getAddress(){
        header('Content-type: application/json');

        $result = AddressService::getAddress();

        echo json_encode($result['result']);
    }

    /**
     * this method adds a new address
     *
     * @access public
     */
    public function addAddress(){
        AddressService::addAddress($_POST);
    }

    /**
     * this method updates a specified address through the index passed through the post
     *
     * @access public
     */
    public function updateAddress(){
        AddressService::updateAddress($_POST);
    }

    /**
     * this method removes a specified address through the index passed through the post
     *
     * @access public
     */
    public function removeAddress(){
        AddressService::removeAddress($_POST);
    }

    /**
     * this method disable a specified address through the index passed through the post
     *
     * @access public
     */
    public function disableAddress(){
        AddressService::disableAddress($_POST);
    }

    /**
     * this method enable a specified address through the index passed through the post
     *
     * @access public
     */
    public function enableAddress(){
        AddressService::enableAddress($_POST);
    }
}