@extends('master')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-7" style="border: 1px solid black;">
                <img src="{{ asset('images/imgForProd.jpeg') }}" alt="" style="width: 80%;">
            </div>
            <div class="col-md-5" style="border: 1px solid black;">
                <div class="prod-info" style="padding: 30px;">

                    <div class="prod-info-title-price d-flex justify-content-between p-6">
                        <h2 class="prod-info-title">Bamboo Palm</h2>
                        <h2 class="prod-info-price">$229</h2>
                    </div>

                    <p class="prod-info-description mt-5">
                        With dense foliage and lush fronds, the Bamboo Palm makes a statement. An air-purifying plant
                        adaptable to low light, this palm can reach heights of up to 8 feet tall in the right conditions.
                    </p>

                    <div class="prod-info-options mt-5">
                        <div class="chose-pot-color d-flex align-items-center">
                            <p class="chose-pot-color-1" style="margin-right: 20px;">1</p>
                            <p class="choose-pot-color-text">CHOOSE POT COLOR</p>
                        </div>
                        <div class="prod-info-swatchers d-flex">
                            <div class="prod-info-swatch d-flex flex-column">
                                <span class="color" style="background-color: #E6E8EA"></span>
                                <span class="prod-info-swatch-color-text">STONE</span>
                            </div>
                            <div class="prod-info-swatch d-flex flex-column">
                                <span class="color" style="background-color: #C78356"></span>
                                <span class="prod-info-swatch-color-text">CLAY</span>
                            </div>
                            <div class="prod-info-swatch d-flex flex-column">
                                <span class="color" style="background-color: #3B4037"></span>
                                <span class="prod-info-swatch-color-text">CHAROCAL</span>
                            </div>
                            <div class="prod-info-swatch d-flex flex-column ">
                                <span class="color" style="background-color: #B7C7CD"></span>
                                <span class="prod-info-swatch-color-text">SLATE</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
