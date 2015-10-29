<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Buy_Transaction_Controller extends REST_Controller {

   /**
    * This method receives a JSON from the Android App containing Buy Transactions
    *
    * @post_params: none
    * @output: Outputs decoded JSON array to Model
    */
   function sync_post() {
        $temp = $this->input->post('params');
        $params = json_decode($temp, TRUE);
        $this->load->model('Buy_Transaction_Model');
        $data = $this->Buy_Transaction_Model->sync_buy_transactions($params["buy_transaction_ts"], $params["id_number"], $params["shop_terminal_id"]);
        $this->response($data, 200);
        echo params;
   }
}


