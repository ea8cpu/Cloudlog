<select
  id="<?php echo $id ?? 'band'; ?>"
  name="<?php echo $name ?? 'band'; ?>"
  class="<?php echo $cssClass ?? 'form-control form-control-sm'; ?>"
>
  <optgroup label="HF">
    <option value="160m" <?php if($this->session->userdata('band') == "160m") { echo "selected=\"selected\""; } ?>>160m</option>
    <option value="80m" <?php if($this->session->userdata('band') == "80m") { echo "selected=\"selected\""; } ?>>80m</option>
    <option value="60m" <?php if($this->session->userdata('band') == "60m") { echo "selected=\"selected\""; } ?>>60m</option>
    <option value="40m" <?php if($this->session->userdata('band') == "40m") { echo "selected=\"selected\""; } ?>>40m</option>
    <option value="30m" <?php if($this->session->userdata('band') == "30m") { echo "selected=\"selected\""; } ?>>30m</option>
    <option value="20m" <?php if($this->session->userdata('band') == "20m") { echo "selected=\"selected\""; } ?>>20m</option>
    <option value="17m" <?php if($this->session->userdata('band') == "17m") { echo "selected=\"selected\""; } ?>>17m</option>
    <option value="15m" <?php if($this->session->userdata('band') == "15m") { echo "selected=\"selected\""; } ?>>15m</option>
    <option value="12m" <?php if($this->session->userdata('band') == "12m") { echo "selected=\"selected\""; } ?>>12m</option>
    <option value="10m" <?php if($this->session->userdata('band') == "10m") { echo "selected=\"selected\""; } ?>>10m</option>
  </optgroup>

  <optgroup label="VHF">
    <option value="6m" <?php if($this->session->userdata('band') == "6m") { echo "selected=\"selected\""; } ?>>6m</option>
    <option value="4m" <?php if($this->session->userdata('band') == "4m") { echo "selected=\"selected\""; } ?>>4m</option>
    <option value="2m" <?php if($this->session->userdata('band') == "2m") { echo "selected=\"selected\""; } ?>>2m</option>
  </optgroup>

  <optgroup label="UHF">
    <option value="70cm" <?php if($this->session->userdata('band') == "70cm") { echo "selected=\"selected\""; } ?>>70cm</option>
    <option value="23cm" <?php if($this->session->userdata('band') == "23cm") { echo "selected=\"selected\""; } ?>>23cm</option>
    <option value="13cm" <?php if($this->session->userdata('band') == "13cm") { echo "selected=\"selected\""; } ?>>13cm</option>
    <option value="9cm" <?php if($this->session->userdata('band') == "9cm") { echo "selected=\"selected\""; } ?>>9cm</option>
  </optgroup>

  <optgroup label="Microwave">
    <option value="6cm" <?php if($this->session->userdata('band') == "6cm") { echo "selected=\"selected\""; } ?>>6cm</option>
    <option value="3cm" <?php if($this->session->userdata('band') == "3cm") { echo "selected=\"selected\""; } ?>>3cm</option>
  </optgroup>
</select>

