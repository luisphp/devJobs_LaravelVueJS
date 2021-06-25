<template>
    <div>
        <h1>Prueba estres Avalara, endpoint Simulations V3</h1>

        <button class="btn btn-primary mt-5 mb-5" v-on:click="llamar_servicio">Ejecutar llamada</button>

        <p> {{ message }} </p>
    </div>
</template>

<script>
import axios from 'axios';

export default {
            data: function() {
            return {
                intentos: ["datos"],
                message: 'Hola Vue!',
                token: 'Bearer eyJhbGciOiJBMTI4S1ciLCJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwidHlwIjoiSldUIn0.A8o-Mp8DtrwjZkpMBYzVKXjqrzNFmCXoNKR9HHp_9cvYmPlapNJ-Hg.L_KODImxhmvVM33jjUFfmQ.QZoEZURSqM9WL6-1L3IyAom32gykxMSYS8XzVg0kE52vWat1xfvi13vxjLaQ0CZoScfadCV7VryOJKiLG1SOiArLmOSqQ1HALIpn1QhGNMja2GR8ddMaCIRpcFQ_PoZdWt7mWvMagpZSrg6QCpP0VL91BAWpZEn57Vt_tf6fBUBGTaPQux4V1zmZavjk89jU-XzWlYYzovH-Vz5nGid45ExrzL9H7Pt-J9AK_zJ0ZqPM-wRkPQIAq7mdHEkPaTxW2UfmnCNAWoFRCh8pKZrSsny2voYhGGFqdU-zsQbRetgqpijqES7fxplmqtWmXaifovX-ONAiptqFy5y2ZCVcUAjiNeGcLTrzND3gavGlCkMM3GXob8V8wSPqh3nABgOT95D1Ep55s1z5P4d_WICcxaORZZbH8sAFuOSB9PSRrHvYp9WGLB1wl02a8V6Hm0IyoEr2Fjmsc0e3vVkrmgVFZFhrPU4SrBiRDfqcdGXCRqp9v3hWmZCgt4qvm8OUL4TXpU_Bp_KTkOU5iMuX4r1Fn2Y4-cD1eK_kZzUu5hKK3qRouW8R2HNz_ucrO_h3OhiijTKv2MKynreteY39AS5W3Cy9qTQH-H4fkRkcWcVdJJ3eIYKk4IE3ewuwW5mxRu2sjT0ECChuY0jvJpkgwJOOtJQsSj93EWqSvC83RXIjUOJ-OyP85G2E2p4Ib1KZPV8SsbQT-0diZR41xdbuoX_Luv5X8NnDXTB8WB2tZk2GAXg7r8xEfGSLM_k_3S3CjEjDmntrmIIzbqYYSG8nEda9broVmZ1pD6w6wPQuTC1CTtIGFcV76y25PQow3L9wSgfKF4AqUEolXi_hXsBlEmlQCswZ19P-OQvf5zL0fwA8bqQN2PQ7lf_uMRVNLk3gjN3GhP1IyQH1JQANMKFliCngHmbMiCczywb64K1GOkAEaacgagm8svlUCSV_130k84xFCbTMPmaV77TEGqTqq4sMdZcoFTo4vHGrATHuhQwPR7lHgK7d4ixgjpP1KsPE2-UGWQMzbwIfhgMiAp7X3oqXATOdHYuGfVn0sr5DV_7AiY4iep0Ws8oJB9sMerubOp6DQX1PASY4afBLS5kWda0IpxVTzXsqMgXU8RjmFWmHGYA1pluhRjrFVfuAb8S7omeTTmHBmtogtc3-HKVSxlQt-Dei9-JsU1uOQdQPr3F5cvTFx1By90-Bu0STNfWvFYZXkg7lB-W6JDn1KpJOy1LJpMlPqTxz87wXiOD7axmaWL2irHHfVkoCKS3v5zxFTJUDuGvf4URUPXTgP1suY2IyaHg0Kjv9crxB4xeD9eUwOM8.dqmRn9JpuV3bZszISFTobw'
            }

        },
        methods: {
            llamar_servicio: function(){

                const header =  {
                            'Authorization': 'Bearer eyJhbGciOiJBMTI4S1ciLCJlbmMiOiJBMTI4Q0JDLUhTMjU2IiwidHlwIjoiSldUIn0.A8o-Mp8DtrwjZkpMBYzVKXjqrzNFmCXoNKR9HHp_9cvYmPlapNJ-Hg.L_KODImxhmvVM33jjUFfmQ.QZoEZURSqM9WL6-1L3IyAom32gykxMSYS8XzVg0kE52vWat1xfvi13vxjLaQ0CZoScfadCV7VryOJKiLG1SOiArLmOSqQ1HALIpn1QhGNMja2GR8ddMaCIRpcFQ_PoZdWt7mWvMagpZSrg6QCpP0VL91BAWpZEn57Vt_tf6fBUBGTaPQux4V1zmZavjk89jU-XzWlYYzovH-Vz5nGid45ExrzL9H7Pt-J9AK_zJ0ZqPM-wRkPQIAq7mdHEkPaTxW2UfmnCNAWoFRCh8pKZrSsny2voYhGGFqdU-zsQbRetgqpijqES7fxplmqtWmXaifovX-ONAiptqFy5y2ZCVcUAjiNeGcLTrzND3gavGlCkMM3GXob8V8wSPqh3nABgOT95D1Ep55s1z5P4d_WICcxaORZZbH8sAFuOSB9PSRrHvYp9WGLB1wl02a8V6Hm0IyoEr2Fjmsc0e3vVkrmgVFZFhrPU4SrBiRDfqcdGXCRqp9v3hWmZCgt4qvm8OUL4TXpU_Bp_KTkOU5iMuX4r1Fn2Y4-cD1eK_kZzUu5hKK3qRouW8R2HNz_ucrO_h3OhiijTKv2MKynreteY39AS5W3Cy9qTQH-H4fkRkcWcVdJJ3eIYKk4IE3ewuwW5mxRu2sjT0ECChuY0jvJpkgwJOOtJQsSj93EWqSvC83RXIjUOJ-OyP85G2E2p4Ib1KZPV8SsbQT-0diZR41xdbuoX_Luv5X8NnDXTB8WB2tZk2GAXg7r8xEfGSLM_k_3S3CjEjDmntrmIIzbqYYSG8nEda9broVmZ1pD6w6wPQuTC1CTtIGFcV76y25PQow3L9wSgfKF4AqUEolXi_hXsBlEmlQCswZ19P-OQvf5zL0fwA8bqQN2PQ7lf_uMRVNLk3gjN3GhP1IyQH1JQANMKFliCngHmbMiCczywb64K1GOkAEaacgagm8svlUCSV_130k84xFCbTMPmaV77TEGqTqq4sMdZcoFTo4vHGrATHuhQwPR7lHgK7d4ixgjpP1KsPE2-UGWQMzbwIfhgMiAp7X3oqXATOdHYuGfVn0sr5DV_7AiY4iep0Ws8oJB9sMerubOp6DQX1PASY4afBLS5kWda0IpxVTzXsqMgXU8RjmFWmHGYA1pluhRjrFVfuAb8S7omeTTmHBmtogtc3-HKVSxlQt-Dei9-JsU1uOQdQPr3F5cvTFx1By90-Bu0STNfWvFYZXkg7lB-W6JDn1KpJOy1LJpMlPqTxz87wXiOD7axmaWL2irHHfVkoCKS3v5zxFTJUDuGvf4URUPXTgP1suY2IyaHg0Kjv9crxB4xeD9eUwOM8.dqmRn9JpuV3bZszISFTobw',
                            "Content-Type": "application/json",
                            "Access-Control-Allow-Origin": true
                }
                axios.post('https://avataxbr.sandbox.avalarabrasil.com.br/v3/simulations',{
                        "header":
                        {
                         "transactionDate":"2021-02-21T10:31:01Z",
                         "amountCalcType":"net",
                         "documentCode":"0050569BC86C1EDB9D8B399F63C7D08D",
                         "goods":
                         {
                          "model":"55"
                         },
                         "messageType":"goods",
                         "eDocCreatorType":"self",
                         "eDocCreatorPerspective":true,
                         "companyLocation":"74544297000192",
                         "locations":
                         {
                          "establishment":
                          {
                           "activitySector":
                           {
                            "type":"activityLine",
                            "code":"importer"
                           },
                           "taxesSettings":
                           {
                            "icmsTaxPayer":true,
                            "pCredSN":0,
                            "subjectToPayrollTaxRelief":true,
                            "subjectWithholdingIss":true
                           },
                           "taxRegime":"realProfit",
                           "entityType":"business",
                           "stateTaxId":"426.745.178",
                           "type":"business",
                           "address":
                           {
                            "zipcode":"04561-004",
                            "state":"SP",
                            "country":"BRA"
                           },
                           "federalTaxId":"74544297000192"
                          },
                          "entity":
                          {
                           "activitySector":
                           {
                            "type":"activityLine",
                            "code":"finalConsumer"
                           },
                           "taxesSettings":
                           {
                            "icmsTaxPayer":false,
                            "pCredSN":0,
                            "subjectToPayrollTaxRelief":true,
                            "subjectWithholdingIss":true
                           },
                           "taxRegime":"individual",
                           "address":
                           {
                            "zipcode":"04710010",
                            "state":"SP",
                            "country":"BRA"
                           },
                           "federalTaxId":"83695780000169"
                          }
                         }
                        },
                        "lines":
                        [
                         {
                          "id":"000010",
                          "lineCode":"1",
                          "operationType":"standardSales",
                          "lineAmount":200.00,
                          "useType":"use or consumption",
                          "numberOfItems":5,
                          "otherCostAmount":0.00,
                          "freightAmount":0.00,
                          "insuranceAmount":0.00,
                          "lineTaxedDiscount":0.00,
                          "itemDescriptor":
                          {
                           "taxCode":"",
                           "hsCode":"4901.10.00",
                           "source":"0",
                           "productType":"FOR PRODUCT",
                           "manufacturerEquivalent":false,
                           "appropriateIPIcreditWhenInGoing":false,
                           "appropriateICMScreditWhenInGoing":false,
                           "usuallyAppropriatePISCOFINSCredit":false,
                           "isPisCofinsEstimatedCredit":false,
                           "piscofinsRevenueType":"01",
                           "unitIPIfactor":1,
                           "unitIcmsfactor":1,
                           "unitIcmsStfactor":1,
                           "unitPisCofinsfactor":1,
                           "comexTaxUnitFactor":1
                          },
                          "customProperties":
                          [
                           {
                            "goods":
                            {
                             "subjectToIPIonInbound":false,
                             "returnedPercentageAmount":0
                            }
                           }
                          ]
                         }
                        ]
                       },
                       {
                          header
                       }
                       ).then(response => {

                    console.log(response);

                    this.intentos.push(response.header.transactionDate);

                    console.log('Event Ids registrados: ', this.intentos );
                    
                }).catch(error => {

                    console.log('Error sin formatear: ', error);

                  });
                }
        },
}
</script>