<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
    
        <div class="title m-b-md">
        Laptop
        </div>
            <div class="alert alert-danger" role="alert" v-bind:class="{hidden: hasError}">
                <!-- All fields are required! -->
            </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" class="form-control" id="brand" required placeholder="brand" name="brand" v-brand="newLaptop.brand">
                </div>
                                        
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" required placeholder="Model" name="model" v-model="newLaptop.model">
                    </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" required placeholder="Price" name="price" v-model="newLaptop.price">
                        </div>

            <button class="btn btn-primary" @click.prevent="createLaptop()">
                Add Laptop
            </button>

            <table class="table table-striped" id="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Model</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for ="laptop in laptops">
                        <th scope="row">@{{laptop.id}}</th>
                        <td>@{{laptop.brand}}</td>
                        <td>@{{laptop.model}}</td>
                        <td>@{{laptop.price}}</td>

                        <td @click="setVal(laptop.id, laptop.brand, laptop.model, laptop.price)"  class="btn btn-info" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i>
                        </td>
                        <td  @click.prevent="deletelaptop(laptop)" class="btn btn-danger"> 
                        <i class="fa fa-trash"></i>
                        </td>
                        </tr>
                    </tbody>
                </table>
                            <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">

                        <div class="modal-body">
                            <input type="hidden" disabled class="form-control" id="e_id" name="id" required :value="this.e_id">
                                Brand: <input type="text" class="form-control" id="e_brand" name="brand" required :value="this.e_brand">
                                Model: <input type="text" class="form-control" id="e_model" name="model" required  :value="this.e_model">
                                Price: <input type="text" class="form-control" id="e_price" name="price" required  :value="this.e_price">
                        </div>    
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" @click="editCar()">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                    </div>

    </div>
</body>
</html>

