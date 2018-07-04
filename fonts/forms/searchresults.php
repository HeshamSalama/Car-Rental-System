<div class="search_delete" style="opacity:0">                               
    <form id="SearchResults">
                                   <div class="result " id="result">
                                    <table style="width:100%">
                                        <tr>
                                            <td class="text-blue">
                                                Car Name
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="name" value="<?php echo $_SESSION['car_name'];?>">
                                                            <input type="text" id="id" name="Delete" value="<?php echo $_SESSION['car_id']; ?>" class="hidden">

                                                <i class="fa fa-warning" id="NameError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Car Model Year
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="model" value="<?php echo $_SESSION['car_model_year'];?>">
                                                 <i class="fa fa-warning" id="ModelError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                               Quantity
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="quantity" value="<?php echo $_SESSION['quantity'];?>">
                                                 <i class="fa fa-warning" id="QuantityError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Hour
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="pricehour" value="<?php echo $_SESSION['price_per_hour'];?>">
                                                <i class="fa fa-warning" id="HourError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Day
                                            </td>
                                            <td class="text-dark">
                                                <input type="text"  id="priceday" value="<?php echo $_SESSION['price_per_day'];?>">
                                                
                                                <i class="fa fa-warning" id="DayError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Engine
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="engine" value="<?php echo $_SESSION['engine'];?>">
                                                <i class="fa fa-warning" id="EngineError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Photo 
                                            </td>
                                            <td class="text-dark">
                                                <input type="file" name="">
                                            </td>
                                        </tr>
                                    </table>
                                       
                                        <div class="fl-left" style="margin-top:20px;">
                                            <button class="btn-primary" type="submit" id="update-info">Update</button>                                            
                                        </div>
                                       </div>
                                        </form>
<form action="../functions/Delete.php" method="post" id="CarDelete" class="fl-right" style="margin-top:20px">
<button class="btn-blue" name="DeleteCar" type="submit" value="<?php echo $_SESSION['car_id']; ?>">Delete</button>
</form>
    <div class="clearfix"></div>
</div>
                                   <div id="status" style="margin-top:50px;"></div>

