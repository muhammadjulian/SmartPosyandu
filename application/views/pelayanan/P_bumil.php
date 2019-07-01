<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap core CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="http://smartposyandu.kotabogor.go.id//assets/select2.css" rel="stylesheet">
  <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/ckeditor/ckeditor.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id/assets/select2.js"></script>
  <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/chart.js/Chart.min.js"></script>
</head>
<body>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="http://smartposyandu.kotabogor.go.id/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"></li>
      </ol> -->
      <!-- Icon Cards-->
      <!-- <div class="row"> -->
        <a href="http://smartposyandu.kotabogor.go.id/addedit/index/penimbangan/ibu">
    <button class="btn btn-primary" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Tambah Data Penimbangan Bumil dan Bufas</button>
</a>
<form action="http://smartposyandu.kotabogor.go.id/index.php/dashboard/export" method="post" accept-charset="utf-8">
   <div class="form-group" style="display: none;">
    <label for="exampleInputEmail1">Keterangan Anak</label>
    <textarea name="hasil" placeholder="Contoh : Anak 2 : Meninngggal 1">
            <thead>
											<tr>
							                  <th rowspan='2'>Nama Ibu</th>
							                  <th colspan='12'>Hasil Penimbangan (Kg)</th>
							                  <th rowspan='2'>Nama Dasawisma</th>
							                  <th class='aksi' rowspan='2'>Aksi</th>
							                </tr>
							                <tr>
							                  <th>Jan</th><th>Feb</th><th>Mar</th><th>Aprl</th><th>Mei</th><th>Juni</th><th>Juli</th><th>Agst</th><th>Sptm</th><th>Oktb</th><th>Nov</th><th>Des</th>
							                </tr>
							              </thead><tbody>
									                <tr>
									                  <td>SITI AISYAH</td><td>63,0</td><td>64</td><td>66</td><td>68</td><td>69</td><td>90</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016050146/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016050146><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISNAWATI</td><td>60</td><td>62</td><td>64</td><td>66</td><td>67</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016063053/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016063053><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISDARWATI</td><td>59</td><td>60</td><td>61</td><td>63</td><td>64</td><td>65</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016064117/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016064117><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Friska Suherman</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016065528/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016065528><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MAELANI</td><td></td><td></td><td></td><td></td><td></td><td></td><td>48</td><td>50</td><td>52</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016065837/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016065837><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Desi Purnamasari</td><td></td><td></td><td></td><td></td><td>46</td><td>48</td><td>50</td><td>52</td><td>54</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016070940/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016070940><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>RIRIN</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>55</td><td>57</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016073157/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016073157><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NOVITA SARI</td><td>62</td><td>64</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171204235610/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171204235610><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>TEGUH RAHAYU SEPTIANI</td><td>52</td><td>53</td><td>54</td><td>56</td><td>58</td><td>60</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205003834/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205003834><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SUCIATY ANGGRAINI SP</td><td>56</td><td>55</td><td>56</td><td>57</td><td>59</td><td>60</td><td>62</td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205004508/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205004508><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SRI KUNDARI</td><td></td><td></td><td>51</td><td>53</td><td>55</td><td>56</td><td>57</td><td>59</td><td>61</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205010934/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205010934><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td>49</td><td>51</td><td>53</td><td>56</td><td>57</td><td>57</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205011435/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205011435><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>JUANITA ZAKIAH</td><td></td><td></td><td></td><td></td><td>50</td><td>52</td><td>54</td><td>56</td><td>57</td><td>60</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205012221/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205012221><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DESI ARI SANTI</td><td></td><td></td><td></td><td></td><td>46</td><td>48</td><td>50</td><td>52</td><td>54</td><td>56</td><td>58</td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205012959/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205012959><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI JUMALIYA</td><td></td><td></td><td></td><td></td><td></td><td>56</td><td>58</td><td>60</td><td>62</td><td>64</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205013616/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205013616><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>WAHYULIATI</td><td></td><td></td><td></td><td></td><td></td><td>52</td><td>53</td><td>55</td><td>56</td><td>58</td><td>60</td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205014544/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205014544><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI KOMARIAH</td><td>60</td><td>63</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020136/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020136><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MARTINA</td><td>62</td><td>64</td><td>67</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020338/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020338><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Rika Ratna Sari</td><td>56</td><td>56</td><td>60</td><td>62</td><td>64</td><td>65</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020700/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020700><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SRI MULITASARI</td><td>62</td><td>64</td><td>65</td><td>66</td><td>67</td><td>69</td><td>70</td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020945/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020945><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>ASTI NURLIZA S.Psi</td><td></td><td>62</td><td>63</td><td>68</td><td>65</td><td>68</td><td>70</td><td>72</td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205035930/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205035930><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>58</td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040846/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040846><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040906/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040906><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>62</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040924/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040924><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>64</td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040944/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040944><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>66</td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205041004/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205041004><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>INES AGUSTIN</td><td></td><td></td><td></td><td>60</td><td>62</td><td>62</td><td>65</td><td>67</td><td>68</td><td>70</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205203256/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205203256><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NADIRA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td>62</td><td>64</td><td>66</td><td>68</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205204624/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205204624><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>HENI NURAINI</td><td>72</td><td>74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205210514/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205210514><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DHESHI RAHMAWATI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>61</td><td>62</td><td>64</td><td>66</td><td>68</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205215111/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205215111><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISOH</td><td></td><td></td><td></td><td></td><td></td><td>54</td><td>56</td><td>58</td><td>60</td><td>62</td><td>64</td><td>66</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205221123/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205221123><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>APRILIYANA WIDIASTUTI</td><td>70</td><td>72</td><td>74</td><td>76</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205222545/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205222545><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NAZIAH</td><td></td><td></td><td></td><td>54</td><td>55</td><td>56</td><td>57</td><td>58</td><td>60</td><td>62</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205223656/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205223656><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI MAESAROH</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>53</td><td>55</td><td>57</td><td>60</td><td>63</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205231356/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205231356><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DEWI  RATRI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td>61</td><td>63</td><td>64</td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206010438/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206010438><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>VENUZAH</td><td></td><td></td><td></td><td></td><td></td><td>56</td><td>56</td><td>58</td><td>60</td><td>62</td><td>65</td><td>69</td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206014521/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206014521><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>ALMA DAMAYANTI DJAYAPRAWIRA</td><td></td><td></td><td></td><td>68</td><td>68</td><td>70</td><td>74</td><td>74</td><td>76</td><td>78</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206020711/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206020711><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>GITA WINA SETIA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206211515/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206211515><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Fitri Adiani Fatonah</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206211819/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206211819><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NANDA ANJANI DEWI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171212222517/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171212222517><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              </tbody>    </textarea>
    <span class="field"><font color='RED'></font></span>
    <span class="field"><font color='GREEN'>Contoh : Anak 2 : Meninngggal 1</font></span>
   </div>
   <input type="text" name="judul" value="Tabel Data Penimbangan Bumil dan Bufas di Posyandu Kenanga" style="display: none;">
    <script type="text/javascript">
      CKEDITOR.replace( '' );
    </script>
  <button class="btn btn-success" style="text-decoration: none;margin-left: 20px;margin-bottom: 20px;">Export Excel</button>
</form><div class="card mb-3" style="overflow: auto;">
  <div class="card-header">
    <i class="fa fa-table"></i> Tabel Data Penimbangan Bumil dan Bufas di Posyandu Kenanga</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
											<tr>
							                  <th rowspan='2'>Nama Ibu</th>
							                  <th colspan='12'>Hasil Penimbangan (Kg)</th>
							                  <th rowspan='2'>Nama Dasawisma</th>
							                  <th class='aksi' rowspan='2'>Aksi</th>
							                </tr>
							                <tr>
							                  <th>Jan</th><th>Feb</th><th>Mar</th><th>Aprl</th><th>Mei</th><th>Juni</th><th>Juli</th><th>Agst</th><th>Sptm</th><th>Oktb</th><th>Nov</th><th>Des</th>
							                </tr>
							              </thead><tbody>
									                <tr>
									                  <td>SITI AISYAH</td><td>63,0</td><td>64</td><td>66</td><td>68</td><td>69</td><td>90</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016050146/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016050146><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISNAWATI</td><td>60</td><td>62</td><td>64</td><td>66</td><td>67</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016063053/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016063053><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISDARWATI</td><td>59</td><td>60</td><td>61</td><td>63</td><td>64</td><td>65</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016064117/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016064117><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Friska Suherman</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016065528/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016065528><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MAELANI</td><td></td><td></td><td></td><td></td><td></td><td></td><td>48</td><td>50</td><td>52</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016065837/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016065837><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Desi Purnamasari</td><td></td><td></td><td></td><td></td><td>46</td><td>48</td><td>50</td><td>52</td><td>54</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016070940/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016070940><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>RIRIN</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>55</td><td>57</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171016073157/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171016073157><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NOVITA SARI</td><td>62</td><td>64</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171204235610/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171204235610><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>TEGUH RAHAYU SEPTIANI</td><td>52</td><td>53</td><td>54</td><td>56</td><td>58</td><td>60</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205003834/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205003834><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SUCIATY ANGGRAINI SP</td><td>56</td><td>55</td><td>56</td><td>57</td><td>59</td><td>60</td><td>62</td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205004508/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205004508><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SRI KUNDARI</td><td></td><td></td><td>51</td><td>53</td><td>55</td><td>56</td><td>57</td><td>59</td><td>61</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205010934/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205010934><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td>49</td><td>51</td><td>53</td><td>56</td><td>57</td><td>57</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205011435/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205011435><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>JUANITA ZAKIAH</td><td></td><td></td><td></td><td></td><td>50</td><td>52</td><td>54</td><td>56</td><td>57</td><td>60</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205012221/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205012221><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DESI ARI SANTI</td><td></td><td></td><td></td><td></td><td>46</td><td>48</td><td>50</td><td>52</td><td>54</td><td>56</td><td>58</td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205012959/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205012959><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI JUMALIYA</td><td></td><td></td><td></td><td></td><td></td><td>56</td><td>58</td><td>60</td><td>62</td><td>64</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205013616/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205013616><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>WAHYULIATI</td><td></td><td></td><td></td><td></td><td></td><td>52</td><td>53</td><td>55</td><td>56</td><td>58</td><td>60</td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205014544/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205014544><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI KOMARIAH</td><td>60</td><td>63</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020136/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020136><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MARTINA</td><td>62</td><td>64</td><td>67</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020338/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020338><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Rika Ratna Sari</td><td>56</td><td>56</td><td>60</td><td>62</td><td>64</td><td>65</td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020700/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020700><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SRI MULITASARI</td><td>62</td><td>64</td><td>65</td><td>66</td><td>67</td><td>69</td><td>70</td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205020945/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205020945><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>ASTI NURLIZA S.Psi</td><td></td><td>62</td><td>63</td><td>68</td><td>65</td><td>68</td><td>70</td><td>72</td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205035930/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205035930><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>58</td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040846/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040846><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040906/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040906><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>62</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040924/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040924><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>64</td><td></td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205040944/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205040944><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MUSTIKA META LESTARI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>66</td>
									                  <td>DASAWISMA KENANGA 3/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205041004/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205041004><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>INES AGUSTIN</td><td></td><td></td><td></td><td>60</td><td>62</td><td>62</td><td>65</td><td>67</td><td>68</td><td>70</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205203256/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205203256><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NADIRA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td>62</td><td>64</td><td>66</td><td>68</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205204624/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205204624><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>HENI NURAINI</td><td>72</td><td>74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205210514/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205210514><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DHESHI RAHMAWATI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>61</td><td>62</td><td>64</td><td>66</td><td>68</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205215111/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205215111><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>MISOH</td><td></td><td></td><td></td><td></td><td></td><td>54</td><td>56</td><td>58</td><td>60</td><td>62</td><td>64</td><td>66</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205221123/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205221123><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>APRILIYANA WIDIASTUTI</td><td>70</td><td>72</td><td>74</td><td>76</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205222545/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205222545><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NAZIAH</td><td></td><td></td><td></td><td>54</td><td>55</td><td>56</td><td>57</td><td>58</td><td>60</td><td>62</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 4/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205223656/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205223656><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>SITI MAESAROH</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>53</td><td>55</td><td>57</td><td>60</td><td>63</td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171205231356/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171205231356><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>DEWI  RATRI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>60</td><td>61</td><td>63</td><td>64</td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206010438/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206010438><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>VENUZAH</td><td></td><td></td><td></td><td></td><td></td><td>56</td><td>56</td><td>58</td><td>60</td><td>62</td><td>65</td><td>69</td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206014521/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206014521><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>ALMA DAMAYANTI DJAYAPRAWIRA</td><td></td><td></td><td></td><td>68</td><td>68</td><td>70</td><td>74</td><td>74</td><td>76</td><td>78</td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206020711/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206020711><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>GITA WINA SETIA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206211515/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206211515><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>Fitri Adiani Fatonah</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 1/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171206211819/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171206211819><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              
									                <tr>
									                  <td>NANDA ANJANI DEWI</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
									                  <td>DASAWISMA KENANGA 2/5</td>
									                  <td class='aksi'><a href=http://smartposyandu.kotabogor.go.id/addedit/penimbangan/edit/20171212222517/ibu><button class='btn btn-warning'>Ubah</button></a>
									                  	  <a href=http://smartposyandu.kotabogor.go.id/addedit/hapus/penimbangan/20171212222517><button class='btn btn-error'>Hapus</button></a>
									                  </td>
									                </tr>
									              </tbody>      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>      <!-- </div> -->
      <!-- Area Chart Example-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/popper/popper.min.js"></script>
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin-datatables.min.js"></script>
    <!-- <script src="http://smartposyandu.kotabogor.go.id//assets/admin/js/sb-admin-charts.js"></script> -->
  </div>
</body>

</html>
