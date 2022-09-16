<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

            public function accueil(){
                return view('client.accueil');
            }

            public function aboutUs(){
                return view('client.about_us');
            }

            public function contact(){
                return view('client.contact');
            }

            public function login(){
                return view('client.login');
            }
            
            public function paiement(){
                return view('client.paiement');
            }
        
            public function cart(){
                return view('client.cart');
            }

            public function shop(){
                return view('client.shop');
            }
            public function wishlist(){
                return view('client.wishlist');
            }
            public function singleProduct(){
                return view('client.singleProduct');
            }


}
