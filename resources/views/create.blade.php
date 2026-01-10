<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
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
                                <input type="text" class="form-control" name="c_name[]" id="c_name" placeholder="Enter the company name">
                                @error('c_name.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="productDetails">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label class="form-label" for="product_name">Product Name</label>
                                <input type="text" class="form-control" name="p_name[0][]" id="p_name[0][]" placeholder="Enter the product name">
                                @error('p_name.0.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-5">
                                <label class="form-label" for="product_type">Product Type</label>
                                <input type="text" class="form-control" name="p_type[0][]" id="p_type[0][]" placeholder="Enter the product type">
                                @error('p_type.0.0')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-2">
                                <label>&nbsp;</label><br>
                                <a href="javascript:void(0);" class="btn btn-success addProject">Add Project</a>
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
        //add company start
        <div class="companyTemplate" style="display: none">
            <div class="companyGroup">
                <div class="companyDetails">
                    <div class="row">
                        <div class="form-group col-md-10">
                            <label class="form-label" for="company_name">Company Name</label>
                            <input type="text" class="form-control" name="c_name[]" id="c_name[]" placeholder="Enter the company name">
                            @error('c_name.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <a href="javascript:void(0);" class="btn btn-danger removeCompany">Remove Company</a>
                        </div>
                    </div>
                </div>
                <div class="productDetails">
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-label" for="product_name">Product Name</label>
                            <input type="text" class="form-control" name="p_name[][]" id="p_name[][]" placeholder="Enter the product name">
                            @error('p_name.*.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label class="form-label" for="product_type">Product Type</label>
                            <input type="text" class="form-control" name="p_type[][]" id="p_type[][]" placeholder="Enter the product type">
                            @error('p_type.*.*')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        //add company end
        // add product start
        <div class="productTemplate" style="display: none">
            <div class="row">
                <div class="form-group col-md-5">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input type="text" class="form-control" name="p_name[][]" id="p_name[][]" placeholder="Enter the product name">
                    @error('p_name.*.*')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-5">
                    <label class="form-label" for="product_type">Product Type</label>
                    <input type="text" class="form-control" name="p_type[][]" id="p_type[][]" placeholder="Enter the product type">
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
        // add product end
    </div>
</body>
</html>
