<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product Filter</title>

    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('public/js/popper.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('public/css/jquery-ui.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <h2 class="text-center my-5"> Product Filter (Checkbox Filter)</h2>


        <div class="row border">



            <!-- sidebar start -->
            <div class="col-md-3 border">

                <div class="card leftNav cate-sect p-3 my-1">
                    <h5>Refine By:<span class="_t-item">(0 items)</span></h5>
                    <div class="col-12 p-0" id="catFilters"></div>
                </div>

                <br>

                <!-- price range start -->
                <div class="list-group">
                    <h4 class="text-center">Price Range</h4>
                    <div class="sidebar-block_content mt-3">
                        <input type="hidden" id="hidden_minimum_price" class="price_input common_selector"
                            value="{{$minimum_price}}">
                        <input type="hidden" id="hidden_maximum_price" class="price_input common_selector"
                            value="{{$maximum_price}}">
                        <p class="text-center mb-1" id="price_show">{{$minimum_price}} - {{$maximum_price}}</p>
                        <div id="price_range"></div>
                    </div>
                </div>
                <!-- price range end -->

                <br>

                <!-- brand start -->
                <div class="list-group">
                    <h4 class="text-center">Brand</h4>
                    <div class="mt-1" style="max-height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php $counter=0; ?>
                        @foreach($brands as $brand => $data )

                        <div class="list-group-item">
                            <label>
                                <input type="checkbox" class="common_selector input_checkbox brand" name="brand"
                                    value="{{$brand}}" attr-name="{{$brand}}" id="{{$brand}}">
                                <label for="{{$brand}}">{{ucfirst($brand)}} </label>

                            </label>
                        </div>
                        <?php $counter++; ?>


                        @endforeach


                    </div>
                </div>
                <!-- brand end -->

                <br>


                <!-- processor start -->
                <div class="list-group">
                    <h4 class="text-center">Processor</h4>
                    <div class="mt-1" style="max-height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php $counter=0; ?>
                        @foreach($processors as $processor => $data )

                        <div class="list-group-item">
                            <label>
                                <input type="checkbox" class="common_selector input_checkbox processor" name="processor"
                                    value="{{$processor}}" attr-name="{{$processor}}" id="{{$processor}}">
                                <label for="{{$processor}}">{{ucfirst($processor)}} </label>

                            </label>
                        </div>
                        <?php $counter++; ?>


                        @endforeach


                    </div>
                </div>
                <!-- processor end -->

                <br>

                <!-- display start -->
                <div class="list-group">
                    <h4 class="text-center">Display</h4>
                    <div class="mt-1" style="max-height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php $counter=0; ?>
                        @foreach($displays as $display => $data )

                        <div class="list-group-item">
                            <label>
                                <input type="checkbox" class="common_selector input_checkbox display" name="display"
                                    value="{{$display}}" attr-name="{{$display}}" id="{{$display}}">
                                <label for="{{$display}}">{{ucfirst($display)}} </label>

                            </label>
                        </div>
                        <?php $counter++; ?>


                        @endforeach


                    </div>
                </div>
                <!-- display end -->


                <br>

                <!-- ram start -->

                <div class="list-group">
                    <h4 class="text-center">RAM</h4>
                    <div class="mt-1" style="max-height:180px; overflow-y: auto; overflow-x: hidden;">
                        <?php $counter=0; ?>
                        @foreach($rams as $ram => $data)

                        <div class="list-group-item">
                            <label>
                                <input type="checkbox" class="common_selector input_checkbox ram" name="ram"
                                    value="{{$ram}}" attr-name="{{$ram}}" id="{{$ram}}">
                                <label for="{{$ram}}">{{ucfirst($ram)}} </label>

                            </label>
                        </div>
                        <?php $counter++; ?>


                        @endforeach


                    </div>
                </div>


                <!-- ram end -->

                <br>

                <!-- storage start -->

                <div class="list-group">
                    <h4 class="text-center">Hard Disk</h4>
                    <div class="mt-1" style="max-height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <?php $counter=0; ?>
                        @foreach($storages as $storage => $data)

                        <div class="list-group-item">
                            <label>
                                <input type="checkbox" class="common_selector input_checkbox storage" name="storage"
                                    value="{{$storage}}" attr-name="{{$storage}}" id="{{$storage}}">
                                <label for="{{$storage}}">{{ucfirst($storage)}} </label>

                            </label>
                        </div>
                        <?php $counter++; ?>


                        @endforeach


                    </div>
                </div>
                <!-- storage end -->





            </div>
            <!-- sidebar end -->

            <!-- main content start -->
            <div class="col-lg-9 col-md-12 col-sm-12 mb-30">
                <div class="card rightSide h-100 mb-0">
                    <h2 class="text-center my-4">All Products</h2>


                    <div class="row m-0 filter_data">

                        @foreach($products as $product)



                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img" src="{{URL::to($product->product_image)}}" alt="Vans">
                                <div class="card-img-overlay d-flex justify-content-end">
                                    <a href="#" class="card-link text-danger like">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{$product->product_name}}</h6>


                                    <p class="card-text card-subtitle text-muted"> {{$product->product_brand}} </p>
                                    <p class="card-text small my-1">
                                        Processor: {{$product->product_name}} <br>
                                        Display: {{$product->product_screen}} <br>
                                        RAM: {{$product->product_ram}} <br>
                                        HDD: {{$product->product_storage}}
                                    </p>

                                    <div class="buy d-flex justify-content-between align-items-center">
                                        <div class="price text-success">Price: ৳{{$product->product_price}}</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach




                    </div>
                </div>
            </div>
            <!-- main content end -->
        </div>




    </div>


    <?php
	$minimum_price = App\Models\Product::min('product_price');
	$maximum_price = App\Models\Product::max('product_price');
	?>


    <!-- category page sidebar filter -->
    <script>
        $(document).ready(function () {

            //.common_selector checkbox check function
            $('.common_selector').change(function () {


                var values = [];
                var counter = 0;

                $('#catFilters').empty();

                $('.input_checkbox').each(function () {

                    if ($(this).is(":checked")) {

                        values.push($(this).attr('value'));

                        $('#catFilters').append(`<div class="alert fade show alert-color _add-secon" role="alert"> ${$(this).attr('attr-name')}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> </div>`);
                        counter++;

                    }
                });

                console.log(values);

                $('._t-item').text('(' + values.length + ' items)');

                if (counter == 0) {
                    $('.filter_data').empty();
                    $('.filter_data').append('No Data Found');
                } else {
                    fetch_filter_data();
                }





            });

            //get_filter() function
            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }

            //fetch_filter_data() function
            function fetch_filter_data() {

                $('.filter_data').empty();

                var brand = get_filter('brand');
                var processor = get_filter('processor');
                var display = get_filter('display');
                var ram = get_filter('ram');
                var storage = get_filter('storage');

                var minimum_price = $('#hidden_minimum_price').val();
                var maximum_price = $('#hidden_maximum_price').val();


                //fetch_filter_data() ajax request
                $.ajax({
                    type: 'GET',
                    data: { brand: brand, processor: processor, display: display, ram: ram, storage: storage, minimum_price: minimum_price, maximum_price: maximum_price },

                    url: 'fetch_data/',
                    success: function (response) {
                        var response = JSON.parse(response);
                        console.log(response);

                        if (response.length == 0) {
                            $('.filter_data').append('No Data Found');
                        } else {
                            response.forEach(element => {

                                $('.filter_data').append(`



                                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                                        <div class="card">
                                            <img class="card-img" src="${element.product_image}" alt="${element.product_name}">
                                            <div class="card-img-overlay d-flex justify-content-end">
                                                <a href="#" class="card-link text-danger like">
                                                    <i class="fas fa-heart"></i>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">${element.product_name}</h6>


                                                <p class="card-text card-subtitle text-muted">${element.product_brand} </p>
                                                <p class="card-text small my-1">
                                                    Processor: ${element.product_name} <br>
                                                    Display: ${element.product_screen} <br>
                                                    RAM: ${element.product_ram} <br>
                                                    HDD: ${element.product_storage}
                                                </p>

                                                <div class="buy d-flex justify-content-between align-items-center">
                                                    <div class="price text-success">Price: ৳${element.product_price}</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                `);



                            }); //forEach end


                        } //if else end
                    } //ajax request success end
                }); //ajax request end


            } // fetch_filter_data() function end



            //price range slide start
            var minimum_price = <?php echo ($minimum_price); ?> ;
            var maximum_price = <?php echo ($maximum_price); ?> ;


            $('#price_range').slider({
                range: true,
                min: minimum_price,
                max: maximum_price,
                values: [minimum_price - 1, maximum_price + 1],
                step: 500,
                stop: function (event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);


                    fetch_filter_data();



                }
            });
            //price range slide end

        });





    </script>

</body>

</html>