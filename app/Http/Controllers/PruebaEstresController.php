<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Respuesta;

class PruebaEstresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intentos = [];

        for ($i=0; $i < 20; $i++) { 
            $response = Http::post('https://enbjjm0g6e4paz1.m.pipedream.net', [
                'email'      => 'user@example.com', 
                'ip_address' => '92.188.61.181',
                'mock_data'  => 'true',
                'url'        => 'http://example.com/'
            ]);

            $resultado = json_decode( $response ,true);
            array_push($intentos, $resultado['event_id']);
            
        }

        // $respuesta = new Respuesta;
        // $respuesta->about = $resultado['about'];
        // $respuesta->workflow_id = $resultado['workflow_id'];
        // $respuesta->owner_id = $resultado['owner_id'];
        // $respuesta->deployment_id = $resultado['deployment_id'];
        // $respuesta->timestamp = $resultado['timestamp'];
        // $respuesta->created_at = date('Y-m-d H:i:s');
        // $respuesta->updated_at = date('Y-m-d H:i:s');
        // $respuesta->save();

        // $respuestas = Respuesta::all();

        // return view('pruebastres')->with(['respuestas' => $respuestas]);
        return view('pruebastres')->with(['intentos' => $intentos]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prueba_ava()
    {
        $intentos = [];

        for ($i=0; $i < 3; $i++) { 
            $response = Http::withHeaders([
                'Authorization' => 'Bearer eyJhbGciOiJBMTI4S1ciLCJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwidHlwIjoiSldUIn0.A8o-Mp8DtrwjZkpMBYzVKXjqrzNFmCXoNKR9HHp_9cvYmPlapNJ-Hg.L_KODImxhmvVM33jjUFfmQ.QZoEZURSqM9WL6-1L3IyAom32gykxMSYS8XzVg0kE52vWat1xfvi13vxjLaQ0CZoScfadCV7VryOJKiLG1SOiArLmOSqQ1HALIpn1QhGNMja2GR8ddMaCIRpcFQ_PoZdWt7mWvMagpZSrg6QCpP0VL91BAWpZEn57Vt_tf6fBUBGTaPQux4V1zmZavjk89jU-XzWlYYzovH-Vz5nGid45ExrzL9H7Pt-J9AK_zJ0ZqPM-wRkPQIAq7mdHEkPaTxW2UfmnCNAWoFRCh8pKZrSsny2voYhGGFqdU-zsQbRetgqpijqES7fxplmqtWmXaifovX-ONAiptqFy5y2ZCVcUAjiNeGcLTrzND3gavGlCkMM3GXob8V8wSPqh3nABgOT95D1Ep55s1z5P4d_WICcxaORZZbH8sAFuOSB9PSRrHvYp9WGLB1wl02a8V6Hm0IyoEr2Fjmsc0e3vVkrmgVFZFhrPU4SrBiRDfqcdGXCRqp9v3hWmZCgt4qvm8OUL4TXpU_Bp_KTkOU5iMuX4r1Fn2Y4-cD1eK_kZzUu5hKK3qRouW8R2HNz_ucrO_h3OhiijTKv2MKynreteY39AS5W3Cy9qTQH-H4fkRkcWcVdJJ3eIYKk4IE3ewuwW5mxRu2sjT0ECChuY0jvJpkgwJOOtJQsSj93EWqSvC83RXIjUOJ-OyP85G2E2p4Ib1KZPV8SsbQT-0diZR41xdbuoX_Luv5X8NnDXTB8WB2tZk2GAXg7r8xEfGSLM_k_3S3CjEjDmntrmIIzbqYYSG8nEda9broVmZ1pD6w6wPQuTC1CTtIGFcV76y25PQow3L9wSgfKF4AqUEolXi_hXsBlEmlQCswZ19P-OQvf5zL0fwA8bqQN2PQ7lf_uMRVNLk3gjN3GhP1IyQH1JQANMKFliCngHmbMiCczywb64K1GOkAEaacgagm8svlUCSV_130k84xFCbTMPmaV77TEGqTqq4sMdZcoFTo4vHGrATHuhQwPR7lHgK7d4ixgjpP1KsPE2-UGWQMzbwIfhgMiAp7X3oqXATOdHYuGfVn0sr5DV_7AiY4iep0Ws8oJB9sMerubOp6DQX1PASY4afBLS5kWda0IpxVTzXsqMgXU8RjmFWmHGYA1pluhRjrFVfuAb8S7omeTTmHBmtogtc3-HKVSxlQt-Dei9-JsU1uOQdQPr3F5cvTFx1By90-Bu0STNfWvFYZXkg7lB-W6JDn1KpJOy1LJpMlPqTxz87wXiOD7axmaWL2irHHfVkoCKS3v5zxFTJUDuGvf4URUPXTgP1suY2IyaHg0Kjv9crxB4xeD9eUwOM8.dqmRn9JpuV3bZszISFTobw'
            ])->post('https://avataxbr.sandbox.avalarabrasil.com.br/v3/simulations', [
                
   "header" => [
         "transactionDate" => date('Y-m-d H:i:s'), 
         "amountCalcType" => "net", 
         "documentCode" => "0050569BC86C1EDB9D8B399F63C7D08D", 
         "goods" => [
            "model" => "55" 
         ], 
         "messageType" => "goods", 
         "eDocCreatorType" => "self", 
         "eDocCreatorPerspective" => true, 
         "companyLocation" => "74544297000192", 
         "locations" => [
               "establishment" => [
                  "activitySector" => [
                     "type" => "activityLine", 
                     "code" => "importer" 
                  ], 
                  "taxesSettings" => [
                        "icmsTaxPayer" => true, 
                        "pCredSN" => 0, 
                        "subjectToPayrollTaxRelief" => true, 
                        "subjectWithholdingIss" => true 
                     ], 
                  "taxRegime" => "realProfit", 
                  "entityType" => "business", 
                  "stateTaxId" => "426.745.178", 
                  "type" => "business", 
                  "address" => [
                           "zipcode" => "04561-004", 
                           "state" => "SP", 
                           "country" => "BRA" 
                        ], 
                  "federalTaxId" => "74544297000192" 
               ], 
               "entity" => [
                              "activitySector" => [
                                 "type" => "activityLine", 
                                 "code" => "finalConsumer" 
                              ], 
                              "taxesSettings" => [
                                    "icmsTaxPayer" => false, 
                                    "pCredSN" => 0, 
                                    "subjectToPayrollTaxRelief" => true, 
                                    "subjectWithholdingIss" => true 
                                 ], 
                              "taxRegime" => "individual", 
                              "address" => [
                                       "zipcode" => "04710010", 
                                       "state" => "SP", 
                                       "country" => "BRA" 
                                    ], 
                              "federalTaxId" => "83695780000169" 
                           ] 
            ] 
      ], 
        "lines" => [
                    [
                        "id" => "000010", 
                        "lineCode" => "1", 
                        "operationType" => "standardSales", 
                        "lineAmount" => 200, 
                        "useType" => "use or consumption", 
                        "numberOfItems" => 5, 
                        "otherCostAmount" => 0, 
                        "freightAmount" => 0, 
                        "insuranceAmount" => 0, 
                        "lineTaxedDiscount" => 0, 
                        "itemDescriptor" => [
                        "taxCode" => "", 
                        "hsCode" => "4901.10.00", 
                        "source" => "0", 
                        "productType" => "FOR PRODUCT", 
                        "manufacturerEquivalent" => false, 
                        "appropriateIPIcreditWhenInGoing" => false, 
                        "appropriateICMScreditWhenInGoing" => false, 
                        "usuallyAppropriatePISCOFINSCredit" => false, 
                        "isPisCofinsEstimatedCredit" => false, 
                        "piscofinsRevenueType" => "01", 
                        "unitIPIfactor" => 1, 
                        "unitIcmsfactor" => 1, 
                        "unitIcmsStfactor" => 1, 
                        "unitPisCofinsfactor" => 1, 
                        "comexTaxUnitFactor" => 1 
                        ], 
                        "customProperties" => [
                            [
                                "goods" => [
                                    "subjectToIPIonInbound" => false, 
                                    "returnedPercentageAmount" => 0 
                                ] 
                            ] 
                        ] 
                    ] 
                ] 
            ]);
        
            $resultado = json_decode( $response ,true);
            array_push($intentos, $resultado['header']['documentCode'].' - '.$resultado['header']['transactionDate']);
            

            // return view('pruebastres')->with(['intentos' => $intentos]);
            
            // Fecha hora: 23/06/2021 , 6:47 (20) - fueron aceptadas
            // Fecha hora: 23/06/2021 , 6:69 (30) - fueron aceptadas
        }


        

        // $respuesta = new Respuesta;
        // $respuesta->about = $resultado['about'];
        // $respuesta->workflow_id = $resultado['workflow_id'];
        // $respuesta->owner_id = $resultado['owner_id'];
        // $respuesta->deployment_id = $resultado['deployment_id'];
        // $respuesta->timestamp = $resultado['timestamp'];
        // $respuesta->created_at = date('Y-m-d H:i:s');
        // $respuesta->updated_at = date('Y-m-d H:i:s');
        // $respuesta->save();

        // $respuestas = Respuesta::all();

        // return view('pruebastres')->with(['respuestas' => $respuestas]);
        return view('pruebastres')->with(['intentos' => $intentos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
