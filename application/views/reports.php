<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php $this->load->view('web-links.php'); ?>

<!-- swiper.js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.css" />

</head>
<body>

    <?php $this->load->view('web-header.php'); ?>

    <div class="reports-page-container">
        
        <div class="reports-page-summary-box">
            <h3>Summary</h3>
            <p>Total donations for 2025 have reached $287,550 with significant increases observed during fundraising events in March and October.</p>
        </div>
        
        <div class="reports-page-table-container">
            <table id="donationsTable" class="reports-page-table table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Donations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="highlight">January</td>
                        <td class="highlight">$18,450</td>
                    </tr>
                    <tr>
                        <td class="highlight">February</td>
                        <td class="highlight">$15,780</td>
                    </tr>
                    <tr>
                        <td class="highlight">March</td>
                        <td class="highlight">$32,650</td>
                    </tr>
                    <tr>
                        <td class="highlight">April</td>
                        <td class="highlight">$21,350</td>
                    </tr>
                    <tr>
                        <td class="highlight">May</td>
                        <td class="highlight">$23,780</td>
                    </tr>
                    <tr>
                        <td class="highlight">June</td>
                        <td class="highlight">$19,450</td>
                    </tr>
                    <tr>
                        <td class="highlight">July</td>
                        <td class="highlight">$21,890</td>
                    </tr>
                    <tr>
                        <td class="highlight">August</td>
                        <td class="highlight">$24,560</td>
                    </tr>
                    <tr>
                        <td class="highlight">September</td>
                        <td class="highlight">$26,670</td>
                    </tr>
                    <tr>
                        <td class="highlight">October</td>
                        <td class="highlight">$37,450</td>
                    </tr>
                    <tr>
                        <td class="highlight">November</td>
                        <td class="highlight">$22,780</td>
                    </tr>
                    <tr>
                        <td class="highlight">December</td>
                        <td class="highlight">$22,740</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th style="text-align:right">Total:</th>
                        <th>$287,550</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class="reports-page-footer">
            <p>Report generated on: May 1, 2025</p>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

    <?php $this->load->view('web-footer.php'); ?>