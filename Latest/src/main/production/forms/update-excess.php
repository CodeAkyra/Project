<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Excess</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">Request Return : Excess > Update Details</h1>
        <div class="button-container">
            <button class="btn-cancel" id="discard-Btn" onclick="parent.postMessage('returnRequest-discardAction', '*')">Discard Changes</button>
            <button class="btn-create" id="save-update-excessBtn"
                onclick="alert('Edit Successfully!');parent.postMessage('productionCreateReturn-saveAction', '*')">Save Changes</button>
        </div>
    </div>

    <div class="module-content">
        <div class="blue-bar">
            <h1 class="module-title">Edit Details</h1>
            <div class="form-content">
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Return ID:</span>
                        <input class="input reqID" type="text" value="req_0001" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Date Req Return:</span>
                        <input class="input dateReq" type="datetime-local" value="#">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Project:</span>
                        <select class="input project">
                            <option value="0">PRJ1_Project_1</option>
                            <option value="1">PRJ2_Project_2</option>
                            <option value="2">PRJ3_Project_3</option>
                            <option value="3">PRJ4_Project_4</option>
                            <option value="4">PRJ5_Project_5</option>
                            <option value="5">PRJ6_Project_6</option>
                        </select>
                    </div>

                </div>


                <div class="input-remark">
                    <span class="input-label">Remarks:</span>
                    <textarea class="input remarks excess-remark" name="remarks" placeholder="test"
                        style="resize: none;"></textarea>
                </div>

                <!-- LINE SEPARATOR -->
                <hr class="line-separator">

                <!-- SECOND PART -->
                <div class="inputs-top-row">
                    <div class="input-grp">
                        <span class="input-label">Material Description:</span>
                        <input list="options" id="input-desc" class="input desc" name="mat-desc"
                            placeholder="Enter Material Description">
                        <datalist id="options">
                            <option value="Material 1">
                            <option value="Material 2">
                            <option value="Material 3">
                            <option value="Material 4">
                            <option value="Material 5">
                            <option value="Material 6">
                        </datalist>

                    </div>

                    <div class="input-grp">
                        <span class="input-label">Supplier:</span>
                        <input class="input supp" id="input-unit" type="text" value="Supplier_Name" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Unit:</span>
                        <input class="input unit" id="input-unit" type="text" value="PC/S" disabled>
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Return:</span>
                        <input class="input qty" id="input-qty" type="number" placeholder="0000">
                    </div>

                    <div class="input-grp">
                        <span class="input-label">Available Qty:</span>
                        <input class="input qtyAvail" id="input-qtyAvail" type="number" placeholder="0000" disabled>
                    </div>

                    <!-- 
                    <div class="input-grp">
                        <span class="input-label">Image:</span>
                        <input class="input btn-choose-file" type="file" id="upload-image" name="attach">
                    </div>-->

                    <div class="input-grp">
                        <span class="input-label">Image:</span>
                        <input class="input btn-choose-file" type="file" id="fileUpload">
                    </div>

                </div>

                <div class="button-area-bottom">
                    <button class="btn-add" onclick="">Add</button>
                </div>


                <!-- LINE SEPARATOR -->
                <hr class="line-separator">

                <!-- MATERIALS ADDED -->
                <h1 class="module-title i3">Materials Added:</h1>
                <!-- 
                <p class="p-material-added">Material Added:</p>-->
                <table class="table-material-added">
                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-cat">Category</th>
                            <th class="th-mat-desc">Material Description</th>
                            <th class="th-unit">Unit</th>
                            <th class="th-supplier">Supplier</th>
                            <th class="th-return-qty">Return Qty.</th>
                            <th class="th-action">Action</th>
                        </tr>
                    </thead>
                    <tbody class="td-style">
                        <tr>
                            <td class="td-cat">Consumables / Hardware</td>
                            <td class="td-mat-desc">Material 1</td>
                            <td class="td-unit">PC/S</td>
                            <td class="td-supplier">Supplier_Name</td>
                            <td class="td-return-qty"><input type="number" value="0"></td>
                            <td class="td-action">
                                <button class="delete-button" onclick="actionDelete()"><i
                                        class="btnDelete fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>