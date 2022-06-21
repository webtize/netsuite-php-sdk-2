<?php

namespace Webtize\NetsuitePhpSdk;


class NetsuiteAPI
{

    public $uid, $skey;

    public function __construct()
    {
        $this->login();
    }

    public function getLocations()
    {
        return $this->sendRequest('/api/getLocations', []);
    }

    public function getPaymentMethods()
    {
        return $this->sendRequest('/api/getPaymentMethods', []);
    }

    public function getTaxTypes()
    {
        return $this->sendRequest('/api/getTaxTypes', []);
    }

    public function getCustomer($nid)
    {
        return $this->sendRequest('/api/getCustomer', [
            'nid' => $nid
        ]);
    }

    public function getProduct($nid)
    {
        return $this->sendRequest('/api/getProduct', [
            'nid' => $nid
        ]);
    }

    public function getServiceItem($nid)
    {
        return $this->sendRequest('/api/getServiceItem', [
            'nid' => $nid
        ]);
    }

    public function getInventoryTransferOrder($nid)
    {
        return $this->sendRequest('/api/getInventoryTransferOrder', [
            'nid' => $nid
        ]);
    }

    public function getCustomers($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getCustomers', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'timestamp' => $timestamp,
            'index' => $index
        ]);
    }

    public function getVendors($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getVendors', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'timestamp' => $timestamp,
            'index' => $index
        ]);
    }

    public function getContacts($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getContacts', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'timestamp' => $timestamp,
            'index' => $index
        ]);
    }

    public function getInventoryTransferOrders($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getInventoryTransferOrders', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'lastSync' => $timestamp,
            'index' => $index
        ]);
    }

    public function getVendorPayments($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getVendorPayments', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'lastSync' => $timestamp,
            'index' => $index
        ]);
    }


    public function getCustomerPayments($timestamp, $searchID = null, $index = null)
    {
        return $this->sendRequest('/api/getCustomerPayments', [
            'noOfRecords' => 10,
            'searchId' => $searchID,
            'lastSync' => $timestamp,
            'index' => $index
        ]);
    }

    public function deleteInventoryItem($internalId)
    {
        return $this->sendRequest('/api/deleteInventoryItem', [
            'internalId' => $internalId,
        ]);
    }

    public function getProducts($numberOfRecords = 10, $changedSince = null, $searchId = null, $index = null)
    {
        return $this->sendRequest('/api/getProducts', array(
            'noOfRecords' => $numberOfRecords,
            'changedSince' => $changedSince,
            'searchId' => $searchId,
            'index' => $index
        ));
    }

    public function saveProducts($product)
    {
        return $this->sendRequest('/api/saveProduct', array(
            'product' => $product,
        ));
    }

    public function saveServicePurchaseItem($product)
    {
        return $this->sendRequest('/api/saveServicePurchaseItem', array(
            'product' => $product,
        ));
    }

    public function delete($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/delete', array(
            'data' => $data,
        ));
    }

    public function saveVendor($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveVendor', array(
            'data' => $data,
        ));
    }

    public function saveContact($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveContact', array(
            'data' => $data,
        ));
    }

    public function getInvoice($internalId)
    {
        return $this->sendRequest('/api/getInvoice', array(
            'internalId' => $internalId,
        ));
    }


    public function getContact($internalId)
    {
        return $this->sendRequest('/api/getContact', array(
            'internalId' => $internalId,
        ));
    }


    public function getItemReceipt($internalId)
    {
        return $this->sendRequest('/api/getItemReceipt', array(
            'internalId' => $internalId,
        ));
    }


    public function getSaleOrder($internalId)
    {
        return $this->sendRequest('/api/getSaleOrder', array(
            'internalId' => $internalId,
        ));
    }

    public function getEmployee($internalId)
    {
        return $this->sendRequest('/api/getEmployee', array(
            'internalId' => $internalId,
        ));
    }

    public function saveSalesOrder($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveSalesOrder', array(
            'data' => $data,
        ));
    }

    public function savePayment($payment)
    {
        if (!is_array($payment)) {
            $payment = $payment->getArray();
        }
        return $this->sendRequest('/api/savePayment', array(
            'payment' => $payment,
        ));
    }

    public function savePurchaseOrder($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/savePurchaseOrder', array(
            'data' => $data,
        ));
    }

    public function saveVendorCredit($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveVendorCredit', array(
            'data' => $data,
        ));
    }

    public function saveInventoryTransferOrder($invTransferOrder)
    {
        if (!is_array($invTransferOrder)) {
            $invTransferOrder = $invTransferOrder->getArray();
        }
        return $this->sendRequest('/api/saveInventoryTransferOrder', array(
            'invTransferOrder' => $invTransferOrder,
        ));
    }

    public function saveInventoryTransferOrderItemReceipt($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveInventoryTransferOrderItemReceipt', array(
            'data' => $data,
        ));
    }

    public function saveInventoryAdjustment($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveInventoryAdjustment', array(
            'data' => $data,
        ));
    }

    public function saveInventoryTransferOrderItemFullfillment($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveInventoryTransferOrderItemFullfillment', array(
            'data' => $data,
        ));
    }

    public function saveRefund($payment)
    {
        if (!is_array($payment)) {
            $payment = $payment->getArray();
        }
        return $this->sendRequest('/api/saveRefund', array(
            'refund' => $payment,
        ));
    }

    public function saveGiftCard($giftcard)
    {
        return $this->sendRequest('/api/saveGiftCard', array(
            'giftcard' => $giftcard,
        ));
    }

    public function saveVendorBill($vendorBill)
    {
        if (!is_array($vendorBill)) {
            $vendorBill = $vendorBill->getArray();
        }
        return $this->sendRequest('/api/saveVendorBill', array(
            'vendorBill' => $vendorBill,
        ));
    }

    public function saveItemReceipt($itemReceipt)
    {
        return $this->sendRequest('/api/saveItemReceipt', array(
            'itemReceipt' => $itemReceipt,
        ));
    }

    public function getPurchaseOrder($internalId)
    {
        return $this->sendRequest('/api/getPurchaseOrder', array(
            'internalId' => $internalId,
        ));
    }

    public function getBill($internalId)
    {
        return $this->sendRequest('/api/getBill', array(
            'internalId' => $internalId,
        ));
    }

    public function getVendor($internalId)
    {
        return $this->sendRequest('/api/getVendor', array(
            'internalId' => $internalId,
        ));
    }

    public function getInventoryAdjustment($internalId)
    {
        return $this->sendRequest('/api/getInventoryAdjustment', array(
            'internalId' => $internalId,
        ));
    }

    public function getCreditNote($internalId)
    {
        return $this->sendRequest('/api/getCreditNote', array(
            'internalId' => $internalId,
        ));
    }

    public function getPurchaseOrders($lastSync, $index = 1, $searchId = null)
    {
        return $this->sendRequest('/api/getPurchaseOrders', array(
            'lastSync' => $lastSync,
            'index' => $index,
            'searchId' => $searchId,
        ));
    }

    public function getInventoryAdjustments($lastSync, $index = 1, $searchId = null)
    {
        return $this->sendRequest('/api/getInventoryAdjustments', array(
            'lastSync' => $lastSync,
            'index' => $index,
            'searchId' => $searchId,
        ));
    }

    public function getVendorCredits($lastSync = null, $index = 1, $searchId = null)
    {
        return $this->sendRequest('/api/getVendorCredits', array(
            'lastSync' => $lastSync,
            'index' => $index,
            'searchId' => $searchId,
        ));
    }

    public function getVendorBills($lastSync, $index = 1, $searchId = null)
    {
        return $this->sendRequest('/api/getVendorBills', array(
            'lastSync' => $lastSync,
            'index' => $index,
            'searchId' => $searchId,
        ));
    }

    public function getGiftCard($code)
    {
        return $this->sendRequest('/api/getGiftCard', array(
            'code' => $code,
        ));
    }

    public function saveCustomer($customer)
    {
        if (!is_array($customer)) {
            $customer = $customer->getArray();
        }
        return $this->sendRequest('/api/saveCustomer', array(
            'customer' => $customer,
        ));
    }

    public function saveCreditNote($creditNote)
    {
        if (!is_array($creditNote)) {
            $creditNote = $creditNote->getArray();
        }
        return $this->sendRequest('/api/saveCreditNote', array(
            'creditNote' => $creditNote,
        ));
    }

    public function getInvoices($lastSync, $searchId = null, $index = 1)
    {
        return $this->sendRequest('/api/getInvoices', array(
            'lastSync' => $lastSync,
            'searchId' => $searchId,
            'index' => $index,
        ));
    }

    public function getcreditMemos($lastSync, $searchId = null, $index = 1)
    {
        return $this->sendRequest('/api/getcreditMemos', array(
            'lastSync' => $lastSync,
            'searchId' => $searchId,
            'index' => $index,
        ));
    }

    public function getSalesOrders($lastSync, $searchId = null, $index = 1)
    {
        return $this->sendRequest('/api/getSalesOrders', array(
            'lastSync' => $lastSync,
            'searchId' => $searchId,
            'index' => $index,
        ));
    }

    public function saveInvoice($invoice)
    {
        if (!is_array($invoice)) {
            $invoice = $invoice->getArray();
        }
        return $this->sendRequest('/api/saveInvoice', array(
            'invoice' => $invoice,
        ));
    }

    public function saveDeposit($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveDeposit', array(
            'data' => $data,
        ));
    }

    public function saveEmployee($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveEmployee', array(
            'data' => $data,
        ));
    }

    public function saveSaleOrderFullfillment($data)
    {
        return $this->sendRequest('/api/saveSaleOrderFullfillment', array(
            'data' => $data,
        ));
    }

    public function getItemLists()
    {
        return $this->sendRequest('/api/getItemLists', array());
    }

    public function saveMatrixOption($data, $list)
    {
        return $this->sendRequest('/api/saveMatrixOption', array(
            'internalId' => $data,
            'list' => $list,
        ));
    }

    public function sendRequest($api, $data)
    {
        $data = array_merge($data, [
            'uid' => $this->uid,
            'skey' => $this->skey,
        ]);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('NAPI_HOST') . $api,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => str_replace('&', '%26', 'data=' . json_encode($data)),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

    public function login()
    {
        $curl = curl_init();


        curl_setopt_array($curl, array(
            CURLOPT_URL => env('NAPI_HOST') . '/api/createSession',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('uid' => env('NAPI_USERID'), 'uname' => env('NAPI_USERNAME'), 'pass' => env('NAPI_PASSWORD')),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        #print_r($response);
        if ($response->status) {
            $this->uid = env('NAPI_USERID');
            $this->skey = $response->skey;
        }
    }


    public function getJournal($internalId)
    {
        return $this->sendRequest('/api/getJournal', array(
            'internalId' => $internalId,
        ));
    }


    public function applyGiftcard($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/applyGiftcard', array(
            'data' => $data,
        ));
    }

    public function getJournals($lastSync, $searchId = null, $index = 1)
    {
        return $this->sendRequest('/api/getJournals', array(
            'lastSync' => $lastSync,
            'searchId' => $searchId,
            'index' => $index,
        ));
    }

    public function getCustomRecordList($recordTypeId, $lastSync, $searchId = null, $index = 1)
    {
        return $this->sendRequest('/api/getCustomRecordList', array(
            'lastSync' => $lastSync,
            'searchId' => $searchId,
            'recordTypeId' => $recordTypeId,
            'index' => $index,
        ));
    }


    public function saveJournal($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveJournal', array(
            'data' => $data,
        ));
    }

    public function saveCustomRecordList($data)
    {
        if (!is_array($data)) {
            $data = $data->getArray();
        }
        return $this->sendRequest('/api/saveCustomRecordList', array(
            'data' => $data,
        ));
    }


}
