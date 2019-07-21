<?php include "includes/header.php"; ?>
<?php include "includes/connection.php"; ?>

<div ng-app="myApp" ng-controller="namesCtrl">

    <p>Type a letter in the input field:</p>

    <p><input type="text" ng-model="test"></p>

    <?php $result = mysqli_query($con, "SELECT * FROM archive");
    $i = 0;
    while ($row = mysqli_fetch_array($result)) { ?>

        <table ng-repeat="x in names | filter:test">
            <tr>
                <td>
                    {{ x }}
                </td>
            </tr>
        </table>

        <script>
            angular.module('myApp', []).controller('namesCtrl', function ($scope) {
                $scope.names = [

                    '<?php echo $row[1]; ?>',
                    '<?php echo $row[2]; ?>'

                ];
            });
        </script>

        <?php $i++;
    }
    mysqli_close($con); ?>


</div>


