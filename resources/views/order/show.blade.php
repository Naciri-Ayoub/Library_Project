@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Order Details</h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;">		
                </div>
            </div>
        </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Details order</h6>
        </div>
        <div class="card-body">
            <main>
                  <h2>Order Details</h2> 
                <p>Client : {{ $order->client->name }}</p>
                <p>Address : {{ $order->delivery_address }}</p>
                <p>Phone : {{ $order->phone }}</p>
                <p>Date : {{ $order->created_at }}</p>
                {{-- <table class="client">
                  <tr>
                    <th>Facture pour</th>
                    <th>Payable à</th>
                    <th>N° de facture</th>
                  </tr>
                  <tr>
                    <td>Naciri Ayoub</td>
                    <td rowspan="2">Nom</td>
                    <td rowspan="2">123456</td>
                  </tr>
                  <tr>
                    <td>Flight and Secure</td>
            
                  </tr>
                  <tr>
                    <td>31 ch. d'Andennes</td>
                    <th>Projet</th>
                    <th>Date d'échéance</th>
                  </tr>
                  <tr>
                    <td>7000 Mons</td>
                    <td></td>
                    <td>16/09/2024</td>
                  </tr>
                </table> --}}
                <hr size="1">
            
                {{-- <table class="description">
                  <tbody>
                    <tr>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price Unique</th>
                      <th>Price total</th>
                    </tr>
                    <tr>
                      <td>Préparation Cablage et pose (h)</td>
                      <td>8</td>
                      <td>38,00MAD</td>
                      <td>304,00MAD</td>
                    </tr>
                    <tr>
                      <td>Fiches</td>
                      <td>2</td>
                      <td>200,00MAD</td>
                      <td>400,00MAD</td>
                    </tr>
                    <tr>
                      <td>Printing Presses</td>
                      <td>250</td>
                      <td>6,95MMAD</td>
                      <td>1737,50MAD</td>
                    </tr>
                    <tr>
                      <td>Pens</td>
                      <td>1</td>
                      <td>856,00MAD</td>
                      <td>856,00MAD</td>
                    </tr>
                    <tr>
                      <td>Interrupteur Niko</td>
                      <td>43</td>
                      <td>6,04MAD</td>
                      <td>259,72MAD</td>
                    </tr>
                  </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="2">Remarque</td>
                        <td>Sous-total</td>
                        <td>3557,22MAD</td>
                      </tr>
                      <tr>
                        <td colspan="3">Ajustements</td>
                        <td>-100,00MAD</td>
                      </tr>
                      <tr>
                        <td colspan="4">3457,22MAD</td>
                      </tr>
                    </tfoot>  
                  </table> --}}
                  {{-- <table class="description">
                    @dd($order->products)
                    @foreach ($order->products as $product)
                        <tr>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->quantity }}</td>
                          <td>
                              <img class="img-profile " width="80"
                              src="{{asset('storage/product').'/'.$product->image}}">
                          </td>
                          <td>
                             {{ $product->category->name }} <br>
                              
                          </td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->code_bare }}</td>
                        </tr>
                        @endforeach
                  </table> --}}
              </main>
        </div>
    </div>

 

@endsection
