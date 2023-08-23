<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Web Image Editor</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/CSS/styles.css" />
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png" />
</head>

<body>
<header class="panel">
    <div id="controls" class="controls no-events">
        <div class="control-item">
            <div class="dropdown">
                <div
                    id="dropdownMenuButton1"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <li>
                        <img src="/assets/images/draw.svg" alt="draw icon" />
                        <div class="text">DRAW</div>
                    </li>
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <button class="dropdown-item" id="penDraw">Pen</button>
                    <button class="dropdown-item" id="lineDraw">Line</button>
                    <button class="dropdown-item" id="rectangleDraw">
                        Rectangle
                    </button>
                    <button class="dropdown-item" id="ellipseDraw">Ellipse</button>
                </div>
            </div>
        </div>
        <div class="control-item" id="cropButton">
            <li>
                <img src="/assets/images/crop-symbol.svg" alt="crop icon" />
                <div class="text">CROP</div>
            </li>
        </div>
        <div class="control-item">
            <div
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#resolutionModal"
            >
                <li>
                    <img src="/assets/images/resize.svg" alt="resize icon" />
                    <div class="text">RESIZE</div>
                </li>
            </div>
        </div>
        <div class="control-item">
            <div class="dropdown">
                <div
                    id="dropdownMenu3"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <li>
                        <img src="/assets/images/filter.svg" alt="filter icon" />
                        <div class="text">FILTER</div>
                    </li>
                </div>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                    <button class="dropdown-item" type="button" id="grayscale">
                        Grayscale
                    </button>
                    <button class="dropdown-item" type="button" id="threshold">
                        Threshold
                    </button>
                    <button class="dropdown-item" type="button" id="sephia">
                        Sephia
                    </button>
                    <button class="dropdown-item" type="button" id="invert">
                        Invert Colors
                    </button>
                </div>
            </div>
        </div>

        <div class="control-item" id="undoButton">
            <li>
                <img src="/assets/images/undo.svg" alt="undo icon" />
                <div class="text">UNDO</div>
            </li>
        </div>
        <div class="control-item" id="redoButton">
            <li>
                <img src="/assets/images/redo.svg" alt="redo icon" />
                <div class="text">REDO</div>
            </li>
        </div>
        <div class="control-item">
            <a id="linkDownload" href="#" download="processedImage.png">
                <li>
                    <img src="/assets/images/download.svg" alt="download icon" />
                    <div class="text">SAVE</div>
                </li>
            </a>
        </div>
    </div>
</header>

<div id="dragAndDropZone" class="img-area text-center">
    <div class="drag-helper">
        <img src="/assets/images/dragImg.png" class="img-fluid" />
        <h5>Drag your picture here to start editing.</h5>
    </div>
    <canvas id="imageProcessed" />
</div>

<!-- Modal resize resolution -->
<div
    class="modal fade"
    id="resolutionModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resolution</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                />
            </div>
            <div class="modal-body">
                <div id="modifyResolution">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                checked="checked"
                                id="checkbox-img-ratio"
                            />
                            <label class="custom-control-label" for="checkbox-img-ratio"
                            >Keep the image ratio</label
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="width-size" class="col-form-label">Width:</label>
                        <input type="number" class="form-control" id="width-size" />
                    </div>
                    <div class="form-group">
                        <label for="height-size" class="col-form-label">Height:</label>
                        <input type="number" class="form-control" id="height-size" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Close
                </button>
                <button type="button" class="btn btn-primary" id="saveResolution">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>
<script type="module" src="/Js/index.js" defer></script>
</body>
</html>
