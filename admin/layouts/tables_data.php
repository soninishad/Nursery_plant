<?php
include ('nav.php');
?>

      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active  aria-current="page">Regular Tables</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Data Tables</h1>
            </div>

            <div class="row">
              <div class="col">
                <div class="alert alert-warning" role="alert">
                  <strong>DataTables are a jQuery-only plugin</strong><br />
                  If you know a similar vanilla JS library that you want to see supported, feel free to open an issue on GitHub.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0" data-table>
                      <thead>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Username</th>
                          <th scope="col">Roles</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>
                            <span class="badge badge-pill badge-primary">Admin</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>
                            <span class="badge badge-pill badge-primary">Author</span>
                            <span class="badge badge-pill badge-primary">Developer</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                            <span class="badge badge-pill badge-danger">Inactive</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- // Main Content -->
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
        var table = $('[data-table]').DataTable({
          "columns": [
            null,
            null,
            null,
            null,
            null,
            { "orderable": false }
          ]
        });

        /* $('.form-control-search').keyup(function(){
          table.search($(this).val()).draw() ;
        }); */
      });
    </script>
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>