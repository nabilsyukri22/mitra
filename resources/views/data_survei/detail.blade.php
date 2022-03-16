<!DOCTYPE html>
<html lang="en">

{{--  head  --}}
@include('sb-admin/head')

<body id="page-top">

    <div id="wrapper">

        {{--  Sidebar  --}}
        @include('sb-admin/sidebar')

        {{--  Content Wrapper  --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{--  Main Content  --}}
            <div id="content">

                {{--  Topbar  --}}
                @include('sb-admin/topbar')

                {{--  Begin Page Content  --}}
                <div class="container-fluid rounded-3 ">

                    {{--  Page Heading  --}}

                    <h4 class="ml-3">Detail</h4>
                    <div class="p-4 m-3 border bg-white">
                        <table class="table table-striped table-hover">
                              <tr>
                                <th scope="col">Nama</th>
                                <td scope="col">{{ $survei->nama }}</td>
                              </tr>
                              <tr>
                                <th scope="col">Kebutuhan</th>
                                <td scope="col">{{ $jumlahmitra->jumlah }}/{{ $survei->kebutuhan }}</td>
                              </tr>
                              <tr>
                                <th scope="col">Status</th>
                                {{--  <td scope="col">
                                    <select class="form-select" name="status" id="status">
                                      <option value="Belum Dimulai">Belum Dimulai</option>
                                      <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                                      <option value="Selesai">Selesai</option>
                                    </select>
                                </td>  --}}
                                <td scope="col">
                                  @php
                                    $date = date('Y-m-d');
                                    if($date < $survei->tgl_mulai)
                                    {
                                      echo "Belum Dimulai";
                                    } else if($date >= $survei->tgl_mulai && $date <= $survei->tgl_akhir)
                                    {
                                      echo "Sedang Berlangsung";
                                    } else 
                                    {
                                      echo "Telah Selesai";
                                    }
                                  @endphp
                                </td>
                              </tr>
                              
                          </table>
                          
                    </div>

                    <div class="d-flex justify-content-between">
                      <div><h4 class="ml-3">Mitra Terhubung</h4></div>
                      <div class="mr-5"><a href="/data_survei/tambah" class="btn btn-primary">Tambah Mitra</a></div>
                    </div>
                    <div class="p-4 m-3 border bg-white">
                      <table class="table table-striped table-hover">
                        <tr>
                          <th scope="col">Nama Mitra</th>
                          <th scope="col">
                            @php
                                  if($date > $survei->tgl_akhir)
                                  {
                                    echo "Rating";
                                  } else 
                                  {
                                    echo "Action";
                                  }
                            @endphp
                          </th>
                          
                        </tr>
                        @foreach ($mitra as $m)
                          <tr>
                            <td scope="col">
                              {{ $m->nama }}
                            </td>
                            <td scope="col">
                              @php
                                  if($date > $survei->tgl_akhir)
                                  {
                                    echo '
                                    <fieldset class="rating">
                                      <input type="radio" id="field'.$m->id.'_star5" name="rating'.$m->id.'" value="5" /><label class = "full" for="field'.$m->id.'_star5"></label>
                                      
                                      <input type="radio" id="field'.$m->id.'_star4" name="rating'.$m->id.'" value="4" /><label class = "full" for="field'.$m->id.'_star4"></label>
                                      
                                      <input type="radio" id="field'.$m->id.'_star3" name="rating'.$m->id.'" value="3" /><label class = "full" for="field'.$m->id.'_star3"></label>
                                      
                                      <input type="radio" id="field'.$m->id.'_star2" name="rating'.$m->id.'" value="2" /><label class = "full" for="field'.$m->id.'_star2"></label>
                                      
                                      <input type="radio" id="field'.$m->id.'_star1" name="rating'.$m->id.'" value="1" /><label class = "full" for="field'.$m->id.'_star1"></label>
                                      
                                    </fieldset>';
                                  } else 
                                  {
                                    echo "<a href='#'> Delete </a>";
                                  }
                              @endphp
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                    {{--  <a href="{{ route('') }}"></a>  --}}

                </div>

            </div>

            {{--  Footer  --}}
            @include('sb-admin/footer')

        </div>

    </div>

    {{--  Scroll to Top Button  --}}
    @include('sb-admin/button-topbar')

    <!-- Logout Modal-->
    @include('sb-admin/logout-modal')

    {{--  JS  --}}
    @include('sb-admin/javascript')

</body>

</html>