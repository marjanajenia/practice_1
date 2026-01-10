<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .container{
            margin: 10%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="companyWrapper">
                <div class="companyGroup">
                    <div class="companyDetails">
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label class="form-label" for="company_name">Company Name</label>
                                <input type="text" class="form-control" name="c_name[]" placeholder="Enter the company name">
                                @error('c_name.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="productWrapper">
                        <div class="productDetails">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label class="form-label" for="product_name">Product Name</label>
                                <input type="text" class="form-control" name="p_name[0][]" placeholder="Enter the product name">
                                @error('p_name.0.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label class="form-label" for="product_type">Product Type</label>
                                <input type="text" class="form-control" name="p_type[0][]" placeholder="Enter the product type">
                                @error('p_type.0.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label>&nbsp;</label><br>
                                <a href="javascript:void(0);" class="btn btn-success addProduct">Add Product</a>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col-md-2">
                    <a href="javascript:void(0);" class="btn btn-success addCompany">Add Company</a>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div class="companyTemplate" style="display: none">
            <div class="companyGroup">
                <div class="companyDetails">
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label class="form-label" for="company_name">Company Name</label>
                            <input type="text" class="form-control" name="c_name[]" placeholder="Enter the company name">
                            @error('c_name.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>&nbsp;</label><br>
                            <a href="javascript:void(0);" class="btn btn-danger removeCompany">Remove Company</a>
                        </div>
                    </div>
                </div>
                <div class="productWrapper">
                    <div class="productDetails">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label" for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="p_name[][]"  placeholder="Enter the product name">
                            @error('p_name.*.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label" for="product_type">Product Type</label>
                            <input type="text" class="form-control" name="p_type[][]" placeholder="Enter the product type">
                            @error('p_type.*.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label>&nbsp;</label><br>
                            <a href="javascript:void(0);" class="btn btn-success addProduct">Add Product</a>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
        <div class="productTemplate" style="display: none">
            <div class="row productGroup">
                <div class="form-group col-md-5">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input type="text" class="form-control" name="p_name[INDEX][]" placeholder="Enter the product name">
                    @error('p_name.*.*')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-5">
                    <label class="form-label" for="product_type">Product Type</label>
                    <input type="text" class="form-control" name="p_type[INDEX][]" placeholder="Enter the product type">
                    @error('p_type.*.*')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label>&nbsp;</label><br>
                    <a href="javascript:void(0);" class="btn btn-danger removeProduct">Remove Product</a>
                </div>
            </div>
        </div>
    </div>
    <script>
       $(document).ready(function () {

            var companyIndex = 0;

            function addCompany(){
                var companyHTML = $('.companyTemplate').html().replace(/INDEX/g, companyIndex);
                $('.companyWrapper').append(companyHTML);
                companyIndex++;
            }

            $('body').on ('click', '.addCompany', function (){
                addCompany();
            });
            $('body').on ('click', '.removeCompany', function (){
                $(this).closest('.companyGroup').remove();
            })

            {{--  function addProduct(companyIndex){
                var productHTML = $('.productTemplate').html().replace(/INDEX/g, companyIndex);
                $('body').find('.companyGroup').eq(companyIndex).find('.productWrapper').append(projectHTML);
            }
            $('body').on ('click', '.addProduct', function(){
                addProduct();
            });  --}}
            $('body').on('click', '.addProduct', function () {

                let companyGroup = $(this).closest('.companyGroup');
                let index = companyGroup.index(); // company position

                let productHTML = $('.productTemplate').html().replace(/INDEX/g, index);

                companyGroup.find('.productWrapper').append(productHTML);
            });

        });
    </script>
</body>
</html>
