</br>
</br>
<div class="container">
  <div class="row">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <?php echo "<form action=\"".site_url("site/reports/")."\" method=\"post\">"; ?>
        <select name="load_terminal">
            <?php
              echo "<option value=\"none\"> none </option>";
              foreach($load_terminals as $load_terminal){
                echo "<option value=/".$load_terminal->load_terminal_id.">".$load_terminal->load_terminal_id."</option>";
              }
            ?>
        </select>
        <select name="month">
            <?php
              $months= array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
              //echo "<option value=\"none\"> none </option>";
              for($i = 1; $i <= 12; $i++ ){
                echo "<option value=/".$i.">".$months[$i-1]."</option>";
              }
            ?>
        </select>
        <select name="day">
            <?php
              //$months= array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
              //echo "<option value=\"none\"> none </option>";
              for($j = 0; $j <= 31; $j++ ){
                echo "<option value=/".$j.">".$j."</option>";
              }
            ?>
        </select>
      </form>
<input type="submit">

      </table>
    </div>
  </div>
</div>