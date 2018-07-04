
<form id="AddCar" method="POST" enctype="multipart/form-data">
                                    <table style="width:100%">
                                        <tr>
                                            <td class="text-blue">
                                                Car ID
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="id">
                                                <i class="fa fa-warning" id="IdError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Car Name
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="name">
                                                <i class="fa fa-warning" id="NameError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Car Model Year
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="model">
                                                <i class="fa fa-warning" id="ModelError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                               Quantity
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="quantity">
                                                <i class="fa fa-warning" id="QuantityError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Hour
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="pricehour">
                                                <i class="fa fa-warning" id="HourError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Price Per Day
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="priceday">
                                                <i class="fa fa-warning" id="DayError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Engine
                                            </td>
                                            <td class="text-dark">
                                                <input type="text" id="engine">
                                                <i class="fa fa-warning" id="EngineError"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-blue">
                                                Photo  
                                            </td>
                                            <td class="text-dark">
                                                <input type="file" name="photo">
                                                <i class="fa fa-warning" id="PhotoError"></i>
                                            </td>
                                        </tr>
                                    </table>
                                        <div class="col-xs-12 text-right">
                                           <button type="submit"  class="btn-blue">Add</button>
                            
                                        </div>
    <div id="status" style="margin-top:50px;"></div>
                                       
                                        </form>
