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
                'Authorization' => ''
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
