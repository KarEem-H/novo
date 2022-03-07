<?php
/*
 * File name: OptionGroupAPIController.php
 * Last modified: 2021.02.07 at 21:56:54
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\OptionGroup;
use App\Repositories\OptionGroupRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class OptionGroupController
 * @package App\Http\Controllers\API
 */
class OptionGroupAPIController extends Controller
{
    /** @var  OptionGroupRepository */
    private $optionGroupRepository;

    public function __construct(OptionGroupRepository $optionGroupRepo)
    {
        $this->optionGroupRepository = $optionGroupRepo;
    }

    /**
     * Display a listing of the OptionGroup.
     * GET|HEAD /optionGroups
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        // dd($request);
        try {
            $this->optionGroupRepository->pushCriteria(new RequestCriteria($request));
            $this->optionGroupRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }
        $optionGroups = $this->optionGroupRepository->all();
        // $this->filterCollection($request, $optionGroups);
        // echo "<pre>";
        // print_r($optionGroups[0]->options[0]->name);
        
        // foreach($optionGroups[0]->options as $key => $value){
        //     // echo $key;
        //     $optionGroups[0]->options[$key]->test = "test";
        // }
    //   echo "<pre>";
    //   if($optionGroups->toArray()){
    //       echo "true";
    //   }else{
    //       echo "false";
    //   }
    //     print_r($optionGroups->toArray());
    //     die;
        if($optionGroups->toArray()){
        foreach($optionGroups[0]->options as $key => $value){
            $attributes= explode(" ",$optionGroups[0]->options[$key]->name);
            // print_r($attributes);
            // array_key_exists("Volvo",$a)
            if($optionGroups[0]->id == 5){
                if(array_key_exists("2",$attributes)){
                    $hours = $attributes[2];
                }else{
                    $hours = "";
                }
                if(array_key_exists("0",$attributes)){
                    $cleaners = $attributes[0];
                }else{
                    $cleaners = "";
                }
                $optionGroups[0]->options[$key]["attributes"] = array("hours"=>intval($hours),"cleaners"=>intval($cleaners));
            }elseif($optionGroups[0]->id == 6){
                if(array_key_exists("2",$attributes)){
                    $hours = $attributes[2];
                }else{
                    $hours = "";
                }
                if(array_key_exists("0",$attributes)){
                    $cleaners = $attributes[0];
                }else{
                    $cleaners = "";
                }
                if($cleaners > 0){
                $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name),"number of rooms"=>intval($cleaners));
                }else{
                    $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name));
                }
            }elseif($optionGroups[0]->id == 7){
                if(array_key_exists("2",$attributes)){
                    $hours = $attributes[2];
                }else{
                    $hours = "";
                }
                if(array_key_exists("0",$attributes)){
                    $cleaners = $attributes[0];
                }else{
                    $cleaners = "";
                }
                if($cleaners > 0){
                $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name),"number of sofas"=>intval($cleaners));
                }else{
                    $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name));
                }
            }elseif($optionGroups[0]->id == 10){
                if(array_key_exists("2",$attributes)){
                    $hours = $attributes[2];
                }else{
                    $hours = "";
                }
                if(array_key_exists("0",$attributes)){
                    $cleaners = $attributes[0];
                }else{
                    $cleaners = "";
                }
                if($cleaners > 0){
                $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name),"number of unit"=>intval($cleaners));
                }else{
                    $optionGroups[0]->options[$key]["attributes"] = array("type"=>preg_replace('/\d/', '', $optionGroups[0]->options[$key]->name));
                }
            }
            
        }
        }
        //  print_r($optionGroups);
        // die;
        return $this->sendResponse($optionGroups->toArray(), 'Option Groups retrieved successfully');
    }

    /**
     * Display the specified OptionGroup.
     * GET|HEAD /optionGroups/{id}
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show($id)
    {
        /** @var OptionGroup $optionGroup */
        if (!empty($this->optionGroupRepository)) {
            $optionGroup = $this->optionGroupRepository->findWithoutFail($id);
        }

        if (empty($optionGroup)) {
            return $this->sendError('Option Group not found');
        }

        return $this->sendResponse($optionGroup->toArray(), 'Option Group retrieved successfully');
    }
}
