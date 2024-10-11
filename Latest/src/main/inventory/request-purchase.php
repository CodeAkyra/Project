<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Purchase</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">

    <!-- HEADER -->
    <div class="header">
        <h1 class="header-title">Inventory > Request Purchase</h1>
        <button class="btn-create" id="create-requestBtn" onclick="parent.postMessage('inventory-openCreateRequest', '*')">Create Request Purchase</button>
    </div>

    <div class="module-content">
        <div class="entries">
            <span>Show
                <input class="entry-num" type="int" value="0">
                Entries</span>
        </div>


        <div class="blue-bar">
            <h1 class="module-title">Request Purchase</h1>

            <!-- TABLE -->
            <div class="table-bg">
                <table class="table-list-request">
                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-status">Status</th>
                            <th class="th-request-purchase-id">Request Purchase ID</th>
                            <th class="th-date">Date Requested</th>
                            <th class="th-date">Date Processed</th>
                            <th class="th-processed-by">Processed By</th>
                            <th class="th-req-by">Requested by</th>
                            <th class="th-action">Action</th>
                        </tr>
                    </thead>

                    <tbody class="td-style">
                        <tr>
                            <td class="td-status status pending"><span class="circle-color-pending"><i class="fa-solid fa-circle circle-pending"></i> Pending</span></td>
                            <td class="td-request-purchase-id">Req_Purchase_001</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-processed-by">-</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-action">
                                <!-- nalimot ko yung para dito, maya q ayusin -->
                                <button class="edit-button" onclick="parent.postMessage('inventory-editRequestPurchase','*')"><i class="btnEdit fa-solid fa-pen-to-square"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td class="td-status status approved"><span class="circle-color-approved"><i class="fa-solid fa-circle circle-approved"></i> Approved</span></td>
                            <td class="td-request-purchase-id">Req_Purchase_002</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-date">MM/DD/YYYY 12:51 PM</td>
                            <td class="td-processed-by">Pizarra</td>
                            <td class="td-req-by">Bautista</td>
                            <td class="td-action">
                                <button class="view-button" onclick="parent.postMessage('inventory-viewRequestPurchase','*')"><i class="btnView fa-solid fa-eye"></i></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- PAGES -->
    <div class="pageBar">
        <div class="pageContainer">
            <p class="pageText">Showing
                <a class="page1">1</a>
                to
                <a class="page2">60</a>
                of
                <a class="ent-total">69</a>
                entries
            </p>
            <div class="pageBtn">
                <p class="btnPrev">Previous</p>
                <a id="pageNum">1</a>
                <a id="pageNum">2</a>
                <a id="pageNum">3</a>
                <a id="pageNum">4</a>
                <a id="pageNum">5</a>
                <p class="btnNext">Next</p>
            </div>
        </div>
    </div>
</body>

</html>