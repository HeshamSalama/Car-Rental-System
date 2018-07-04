
<div class="search_delete" style="opacity:0">
    <form id="SearchResults" method="POST" action="../Controllers/UpdateCar.php">
                                   <div class="result " id="result">
                                    <table style="width:100%">
                                        <tr>
                                            <td class="text-blue">
                                                Car Name
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="name" name="car-name" value="<?php echo $_SESSION['b0'] ;?>">
                                                <input type="text" id="id" name="Delete" value="<?php echo $_SESSION['b1']; ?>" class="hidden">

                                                <i class="fa fa-warning" id="NameError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Car Model Year
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="model" name="car-model" value="<?php echo $_SESSION['b2'];?>">
                                                 <i class="fa fa-warning" id="ModelError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                               Quantity
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="quantity" name="car-quantity" value="<?php echo $_SESSION['b3'];?>">
                                                 <i class="fa fa-warning" id="QuantityError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Hour
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="pricehour" name="car-PH" value="<?php echo $_SESSION['b4'];?>">
                                                <i class="fa fa-warning" id="HourError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Day
                                            </td>
                                            <td class="text-dark">
                                                <input type="text"  id="priceday" name="car-PD" value="<?php echo $_SESSION['b5'];?>">

                                                <i class="fa fa-warning" id="DayError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Engine
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="engine" name="car-engine" value="<?php echo $_SESSION['b6'];?>">
                                                <i class="fa fa-warning" id="EngineError"></i>
                                            </td>
                                        </tr>

                                    </table>

                                        <div class="fl-left" style="margin-top:20px;">
                                            <button class="btn-primary" type="submit" name="update-car" value="<?php echo $_SESSION['carid'];?>">Update</button>
                                            <button class="btn-blue" name="delete-car" type="submit" value="<?php echo $_SESSION['carid']; ?>">Delete</button>
                                        </div>
                                       </div>
                                        </form>
<form action="../functions/Delete.php" method="post" id="CarDelete" class="fl-right" style="margin-top:20px">
<button class="btn-blue" name="DeleteCar" type="submit" value="<?php echo $_SESSION['car_id']; ?>" hidden>Delete</button>

</form>
    <div class="clearfix"></div>
</div>
                                   <div id="status" style="margin-top:50px;"></div>
