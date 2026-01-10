<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
