<?php

    foreach ($customers as $key => $customer) 
    {
      $temp = array();
      $temp['ip_add']       = $customer->ip_address;
      $temp['country_name'] = $customer->country_name;
      $temp['region_code']  = $customer->region_code;
      $temp['region_name']  = $customer->region_name;
      $temp['city']         = $customer->city;
      $temp['lat_user']     = $customer->latitude_user;
      $temp['long_user']    = $customer->longitude_user;
      $result[] = $temp;
    }

?>