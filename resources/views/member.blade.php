@extends('template/template')


@section('title', 'Member List')
@section('content')
<section class="section">
        <div class="card">
         
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       
                        <tr>
                            <td>Kuame</td>
                            <td>Quisque.purus@mauris.org</td>
                            <td>(0151) 561 8896</td>
                            <td>Tresigallo</td>
                            <td>
                            <button type="button"  style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Deacon</td>
                            <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                            <td>07740 599321</td>
                            <td>Karapınar</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Channing</td>
                            <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                            <td>0845 46 49</td>
                            <td>Warrnambool</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Aladdin</td>
                            <td>sem.ut@pellentesqueafacilisis.ca</td>
                            <td>0800 1111</td>
                            <td>Bothey</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Cruz</td>
                            <td>non@quisturpisvitae.ca</td>
                            <td>07624 944915</td>
                            <td>Shikarpur</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Keegan</td>
                            <td>molestie.dapibus@condimentumDonecat.edu</td>
                            <td>0800 200103</td>
                            <td>Assen</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Ray</td>
                            <td>placerat.eget@sagittislobortis.edu</td>
                            <td>(0112) 896 6829</td>
                            <td>Hofors</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Maxwell</td>
                            <td>diam@dapibus.org</td>
                            <td>0334 836 4028</td>
                            <td>Thane</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Carter</td>
                            <td>urna.justo.faucibus@orci.com</td>
                            <td>07079 826350</td>
                            <td>Biez</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Stone</td>
                            <td>velit.Aliquam.nisl@sitametrisus.com</td>
                            <td>0800 1111</td>
                            <td>Olivar</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Berk</td>
                            <td>fringilla.porttitor.vulputate@taciti.edu</td>
                            <td>(0101) 043 2822</td>
                            <td>Sanquhar</td>
                            <td>
                            <button type="button" style="font-weight: 700;" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleEdit">
                            Upgrade</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@stop