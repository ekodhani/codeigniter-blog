<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // mencegah user untuk login tanpa melalui form login
        if (!$this->session->userdata('email')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer', $data);
    }

    // untuk menampilkan halaman desain dan menampilkan datanya
    public function design()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['produk'] = $this->Model_Csb->read('produk')->result();
        $data['title'] = 'Product - Design';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/design', $data);
        $this->load->view('template/footer', $data);
    }

    // untuk menampilkan halaman form untuk menambah data desain
    public function add_design()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['produk'] = $this->Model_Csb->read('produk')->result();
        $data['title'] = 'Product - Design';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/form_design', $data);
        $this->load->view('template/footer', $data);
    }

    // action dari halaman form tambah desain
    public function act_add_design()
    {
        $name = $this->input->post('name');

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() != false) {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/image/product/';
            $config['file_name'] = 'product';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();

                $data = [
                    'gambar' => $image['file_name'],
                    'nama_produk' => $name,
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('produk', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mantap!</div>');
                redirect('admin/design');
            } else {
                $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
                $data['produk'] = $this->Model_Csb->read('produk')->result();
                $data['title'] = 'Produk - Design';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/form_design', $data);
                $this->load->view('template/footer', $data);
            }
        }
    }

    // function untuk mengedit data desain
    public function edit_design($id)
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['produk'] = $this->Model_Csb->select(['id_produk' => $id], 'produk')->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Product - Edit Design';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/edit_design', $data);
            $this->load->view('template/footer', $data);
        } else {
            $id_produk = $id;
            $nama_produk = $this->input->post('name');
            $tgl = date('Y-m-d');

            // Apakah ada gambar ?
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/image/product/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors('<p>', '</p>');
                }
            }

            $this->db->set('date_created', $tgl);
            $this->db->set('nama_produk', $nama_produk);
            $this->db->where('id_produk', $id_produk);
            $this->db->update('produk');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Produk Berhasil Di Update Min!</div>');
            redirect('admin/design');
        }
    }

    // function untuk menghapus data desain
    public function delete_design($id)
    {
        $this->Model_Csb->delete('produk', ['id_produk' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terhapus</div>');
        redirect('admin/design');
    }

    // function untuk menampilkan halaman merch
    public function merch()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['merch'] = $this->Model_Csb->read('merch')->result();
        $data['title'] = 'Product - Merch';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/merch', $data);
        $this->load->view('template/footer', $data);
    }

    // function untuk menampilkan halaman tambah data merch
    public function add_merch()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['title'] = 'Add New Merch!';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/form_merch', $data);
        $this->load->view('template/footer', $data);
    }

    // action untuk halaman tambah data merch
    public function act_add_merch()
    {
        $name = $this->input->post('name');
        $quantity = $this->input->post('quantity');
        $size = $this->input->post('size');
        $price = $this->input->post('price');

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|numeric');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');
        if ($this->form_validation->run() != false) {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/image/merch/';
            $config['file_name'] = 'Merch';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();

                $data = [
                    'nama_merch' => $name,
                    'qty' => $quantity,
                    'size' => $size,
                    'harga' => $price,
                    'gambar' => $image['file_name'],
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('merch', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mantap!</div>');
                redirect('admin/merch');
            } else {
                $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
                $data['title'] = 'Add New Merch!';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/form_merch', $data);
                $this->load->view('template/footer', $data);
            }
        }
    }

    // function untuk menampilkan sebuah detail dari data merch
    public function detail_merch($id)
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['merch'] = $this->Model_Csb->select(['id_merch' => $id], 'merch')->row_array();
        $data['title'] = 'Product - Detail Merch ';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/detail_merch', $data);
        $this->load->view('template/footer', $data);
    }

    // function untuk mengedit data merch
    public function edit_merch($id)
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['merch'] = $this->Model_Csb->select(['id_merch' => $id], 'merch')->row_array();

        $this->form_validation->set_rules('name', 'Merch Name', 'required|trim');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|trim');
        $this->form_validation->set_rules('size', 'Size', 'required|trim');
        $this->form_validation->set_rules('price', 'Price', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Product - Edit Merch';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/edit_merch', $data);
            $this->load->view('template/footer', $data);
        } else {
            $id_merch = $id;
            $nama_merch = $this->input->post('name');
            $quantity = $this->input->post('quantity');
            $size = $this->input->post('size');
            $harga = $this->input->post('price');
            $tgl = date('Y-m-d');

            // Apakah ada gambar ?
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/image/merch/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors('<p>', '</p>');
                }
            }

            $this->db->set('date_created', $tgl);
            $this->db->set('harga', $harga);
            $this->db->set('size', $size);
            $this->db->set('qty', $quantity);
            $this->db->set('nama_merch', $nama_merch);
            $this->db->where('id_merch', $id_merch);
            $this->db->update('merch');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Merch Berhasil Di Update Min!</div>');
            redirect('admin/merch');
        }
    }


    // function untuk menghapus data merch
    public function delete_merch($id)
    {
        $this->Model_Csb->delete('merch', ['id_merch' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terhapus</div>');
        redirect('admin/merch');
    }

    // function untuk menampilkan halaman blog
    public function blog()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['blog'] = $this->Model_Csb->read('blog')->result();
        $data['title'] = 'Blog';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/blog', $data);
        $this->load->view('template/footer', $data);
    }

    // function untuk menampilkan halaman tambah data blog
    public function add_blog()
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['title'] = 'Create Content';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/form_blog', $data);
        $this->load->view('template/footer', $data);
    }

    // action dari halaman tambah data blog
    public function act_add_blog()
    {
        $title = $this->input->post('title');
        $content = $this->input->post('content');

        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        if ($this->form_validation->run() != false) {
            // konfigurasi upload file
            $config['allowed_types'] = 'jpeg|jpg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/image/thumb/';
            $config['file_name'] = 'Thumb';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail = $this->upload->data();

                $data = [
                    'thumbnail' => $thumbnail['file_name'],
                    'judul_blog' => $title,
                    'konten_isi' => $content,
                    'date_created' => date('Y-m-d')
                ];
                $this->db->insert('blog', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Mantap!</div>');
                redirect('admin/blog');
            } else {
                $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
                $data['title'] = 'Create Content';
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('admin/form_blog', $data);
                $this->load->view('template/footer', $data);
            }
        }
    }

    // function untuk menampilkan sebuah detail data blog
    public function detail_blog($id)
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['blog'] = $this->Model_Csb->select(['id_blog' => $id], 'blog')->row_array();
        $this->load->view('admin/content', $data);
    }

    // function untuk mengedit konten blog
    public function update_blog($id)
    {
        $data['admin'] = $this->Model_Csb->select(['email' => $this->session->userdata('email')], 'admin')->row_array();
        $data['blog'] = $this->Model_Csb->select(['id_blog' => $id], 'blog')->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('content', 'Content', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Product - Edit Merch';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('admin/edit_blog', $data);
            $this->load->view('template/footer', $data);
        } else {
            $id_blog = $id;
            $judul_blog = $this->input->post('title');
            $konten_isi = $this->input->post('content');
            $tgl = date('Y-m-d');

            // Apakah ada gambar ?
            $upload_image = $_FILES['thumbnail']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/image/thumb/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('thumbnail')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('thumbnail', $new_image);
                } else {
                    echo $this->upload->display_errors('<p>', '</p>');
                }
            }

            $this->db->set('date_created', $tgl);
            $this->db->set('konten_isi', $konten_isi);
            $this->db->set('judul_blog', $judul_blog);
            $this->db->where('id_blog', $id_blog);
            $this->db->update('blog');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Konten Berhasil Di Update Min!</div>');
            redirect('admin/blog');
        }
    }

    // function untuk menghapus data blog
    public function delete_blog($id)
    {
        $this->Model_Csb->delete('blog', ['id_blog' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terhapus</div>');
        redirect('admin/blog');
    }
}
