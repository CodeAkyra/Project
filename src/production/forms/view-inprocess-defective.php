<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View In-Process Defective</title>

    <link rel="stylesheet" href="../../../styles/main.css">
    <link rel="stylesheet" href="../../../styles/create-table.css">
    <link rel="stylesheet" href="/src/styles/tables.css">
    <link rel="stylesheet" href="../../../styles/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="body-iframe-padding">
    <div class="header">
        <h1 class="header-title">Request Return : Defective > View In-Process</h1>
        <button class="btn-cancel" id="returnBtn">Return</button>
    </div>

    <div class="module-content">
        <div class="blue-bar">
            <h1 class="module-title">Return Details</h1>
            <div class="table-bg">
                <table class="table-list-request">
                    <thead class="column-title">
                        <tr class="th-style">
                            <th class="th-cat">Category</th>
                            <th class="th-mat-desc">Material Description</th>
                            <th class="th-unit">Unit</th>
                            <th class="th-supplier">Supplier</th>
                            <th class="th-return-qty">Return Qty.</th>
                            <th class="th-approved-qty">Approved Qty.</th>
                            <th class="th-rejected-qty">Rejected Qty.</th>
                            <th class="th-proof">Proof of Defect</th>
                        </tr>
                    </thead>
    
                    <tbody class="td-style">
                        <tr>
                            <td class="th-cat">Consumable / Hardware</td>
                            <td class="th-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                            <td class="td-approved-qty">10</td>
                            <td class="td-rejected-qty">10 </td>
                            <td class="td-proof">
                                <button class="view-image"><i class="btnEdit fa-solid fa-image"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-cat">Consumable / Hardware</td>
                            <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                            <td class="td-approved-qty">10</td>
                            <td class="td-rejected-qty">10 </td>
                            <td class="td-proof">
                                <button class="view-image"><i class="btnEdit fa-solid fa-image"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-cat">Consumable / Hardware</td>
                            <td class="td-mat-desc">YANK CONCEALED DOOR CLOSER W / HOLD OPEN Y380 NON-HANDED
                                (65KGS / 500,000 CYCLES)</td>
                            <td class="td-unit">PC / S</td>
                            <td class="td-supplier">SUPPLIER_NAME</td>
                            <td class="td-return-qty">10</td>
                            <td class="td-approved-qty">10</td>
                            <td class="td-rejected-qty">10 </td>
                            <td class="td-proof">
                                <button class="view-image"><i class="btnEdit fa-solid fa-image"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- PAGES -->
        <div class="pageBar" style="margin: 20px; border-radius: 0px;">
            <div class="pageContainer">
                <p class="pageText">Page
                    <a class="page1">1</a>
                    to
                    <a class="page2">3</a>
                </p>
                <div class="pageBtn">
                    <p class="btnPrev">Previous</p>
                    <a id="pageNum">1</a>
                    <a id="pageNum">2</a>
                    <a id="pageNum">3</a>
                    <p class="btnNext">Next</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Return Button
        document.getElementById('returnBtn').addEventListener('click', function () {
            parent.postMessage('returnRequest-returnAction', '*');
        });
    </script>
</body>
</html>

<!-- Dito sa In-Process, nag rereflect kung ano yung mga Approved and Rejected. Like everytime nag uupdate sa purchasing ng mga inaapprove or rinereject, nakikita ni PIC dito. Siguro nag cchange yung color ng cell or row para makita na may updates na ginawa -->