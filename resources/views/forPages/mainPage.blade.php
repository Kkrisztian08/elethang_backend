@extends('layouts.app')

@section('content')
    


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="rounded">
                    <h1>Röviden rúlunk</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque quaerat vel id excepturi ratione illo molestias veritatis, aliquid culpa unde nihil impedit eaque ad facere voluptate. Eos quas animi blanditiis.</p>

                    <h3>Új jövevények</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere illo, est minima possimus exercitationem autem placeat, dolor odio repellendus ut fugiat vitae. Illum, soluta. Recusandae impedit quidem doloremque eveniet!</p>
                
                    <div class="container mt-3">
                        <h3>Brand / Logo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab harum, delectus autem, accusantium expedita assumenda veniam dolore quas et illum dolor mollitia porro consequatur obcaecati fugiat ex repudiandae dicta esse.</p>
                        <p>When using the .navbar-brand class with images, Bootstrap 5 will automatically style the image to fit the navbar.</p>
                    </div>
                    <div class="container mt-3">
                        <h3>Brand / Logo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab harum, delectus autem, accusantium expedita assumenda veniam dolore quas et illum dolor mollitia porro consequatur obcaecati fugiat ex repudiandae dicta esse.</p>
                        <p>When using the .navbar-brand class with images, Bootstrap 5 will automatically style the image to fit the navbar.</p>
                    </div>
                    <div class="container mt-3">
                        <h3>Brand / Logo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab harum, delectus autem, accusantium expedita assumenda veniam dolore quas et illum dolor mollitia porro consequatur obcaecati fugiat ex repudiandae dicta esse.</p>
                        <p>When using the .navbar-brand class with images, Bootstrap 5 will automatically style the image to fit the navbar.</p>
                    </div>
                    <div class="container mt-3">
                        <h3>Brand / Logo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab harum, delectus autem, accusantium expedita assumenda veniam dolore quas et illum dolor mollitia porro consequatur obcaecati fugiat ex repudiandae dicta esse.</p>
                        <p>When using the .navbar-brand class with images, Bootstrap 5 will automatically style the image to fit the navbar.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">


                        <table>
                            <tr>
                                <th>Név</th>
                                <th>Nem</th>
                                <th>Születésnap</th>
                            </tr>
                            @foreach ($dogs as $dog)
                                <tr>
                                    <td>
                                        <h3>{{ $dog->name }}</h3>
                                    </td>
                                    <td>{{ $dog->gender }}</td>
                                    <td>{{ $dog->likely_bday }}</td>
                                    <td>
                                        <img src="/img/logo_szerkesztve.png" alt="kutya" style="width: 100%;">
                                    </td>
                                </tr>
                            @endforeach
                            @foreach ($cats as $cat)
                                <tr>
                                    <td>
                                        <h3>{{ $cat->name }}</h3>
                                    </td>
                                    <td>{{ $cat->gender }}</td>
                                    <td>{{ $cat->likely_bday }}</td>
                                    <td>
                                        <img src="/img/logo_szerkesztve.png" alt="kutya" style="width: 100%;">
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <div class="card">
                                <div class="card-body">
                                    <h1>Kutyák</h1>
                                </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <h2>Macskák</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
