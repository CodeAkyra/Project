<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Purchase Order</title>

    <link rel="stylesheet" href="../../../styles/create-table.css">
    <link rel="stylesheet" href="/src/styles/tables.css">
    <link rel="stylesheet" href="../../../styles/tables.css">
    <link rel="stylesheet" href="../../../styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">

    <div class="header">
        <h1 class="header-title">Purchasing > Purchase Order > Create Purchase</h1>
        <button class="btn-cancel" id="cancelrequestBtn" onclick=" parent.postMessage('purchasing-viewPurchaseOrder','*');">Cancel</button>
        <button class="btn-create" id="save-create-request"
            onclick="alert('Create Purchase Order Successfully!'); parent.postMessage('purchasing-viewPurchaseOrder','*');">Save and Request</button>
    </div>

    <div class="blue-bar">
        <!-- FIRST PART -->
        <h1 class="module-title">Request Details</h1>
        <div class="form-content">
            <div class="inputs-top-row">
                <div class="input-grp">
                    <span class="input-label">Request ID:</span>
                    <input class="input reqID" type="text" value="req_0001" disabled>
                </div>

                <div class="input-grp">
                    <span class="input-label">Date Requested:</span>
                    <input class="input dateReq" type="datetime-local" value="#">
                </div>

                <div class="input-grp">
                    <span class="input-label">Date Needed:</span>
                    <input class="input dateNeed" type="datetime-local" value="#" disabled>
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

            <!-- INPUT REMARK -->
            <div class="input-remark">
                <span class="input-label">Remarks:</span>
                <textarea class="input remarks" name="remarks" style="resize: none;"></textarea>
            </div>

            <!-- LINE SEPARATOR -->
            <hr class="line-separator">

            <!-- SECOND PART -->
           


            <!-- LINE SEPARATOR -->
            <hr class="line-separator">

            <!-- MATERIALS ADDED -->
            <h1 class="module-title i3">Items Summary for Purchase:</h1>
            <!-- 
            <p class="p-material-added">Material Added:</p>-->
            <table class="table-material-added">
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-category">Category</th>
                        <th class="th-mat-desc">Material Description</th>
                        <th class="th-unit">Unit</th>
                        <th class="th-qty">Quantity</th>
                        <th class="th-qty-avail">Available Quantity</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>
                <tbody class="td-style">
                    <tr>
                        <td class="td-category">Consumables / Hardware</td>
                        <td class="td-material-description">Material 1</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-quantity">100</td>
                        <td class="td-available-quantity">500</td>
                        <td class="td-action">
                            <button class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-category">Consumables / Hardware</td>
                        <td class="td-material-description">Material 1</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-quantity">100</td>
                        <td class="td-available-quantity">500</td>
                        <td class="td-action">
                            <button class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-category">Consumables / Hardware</td>
                        <td class="td-material-description">Material 1</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-quantity">100</td>
                        <td class="td-available-quantity">500</td>
                        <td class="td-action">
                            <button class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-category">Consumables / Hardware</td>
                        <td class="td-material-description">Material 1</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-quantity">100</td>
                        <td class="td-available-quantity">500</td>
                        <td class="td-action">
                            <button class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-category">Consumables / Hardware</td>
                        <td class="td-material-description">Material 1</td>
                        <td class="td-unit">PC/S</td>
                        <td class="td-quantity">100</td>
                        <td class="td-available-quantity">500</td>
                        <td class="td-action">
                            <button class="edit-button"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-button" onclick="actionDelete()"><i
                                    class="btnDelete fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>