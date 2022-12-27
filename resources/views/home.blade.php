@extends('layouts.app')

@section('content')
<body class="home">
    <!------------------------------彈出視窗-------------------------------------->
    <div class="grouppop">
        <div id="requiredcourse" class="popup">
            <h2 class="field">尚未獲得的必修學分清單</h2>
            <span class="cross">X</span>
            <div class="requiredclass" id="reqc">

            </div>
        </div>
        <div id="optionalcourse" class="popup">
            <h2 class="field">選修
                <div style="font-size:15px; font-weight: lighter;">不納入專題學分</div>
            </h2>
            <span class="cross">X</span>
            <div class="optionalclass">
                <div class="type">共同教育中心(<span id="chone">0</span>/8)</div>
                <div class="type">系內選修(<span id="chtwo">0</span>/46)</div>
            </div>

        </div>
        <div id="generalcourse" class="popup">
            <h2 class="field">博雅八大領域</h2>
            <span class="cross">X</span>
            <div class="eightfield">
                <div class="subfield">
                    <div class="type">人格(<span id="fieldone">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">民主(<span id="fieldtwo">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">全球(<span id="fieldthree">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">經典(<span id="fieldfour">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">美學(<span id="fieldfive">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">科技(<span id="fieldsix">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">自然(<span id="fieldseven">0</span>/4)</div>
                </div>
                <div class="subfield">
                    <div class="type">歷史(<span id="fieldeight">0</span>/4)</div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------------個人資料-------------------------------------->
    <div style="display: flex;" class="up">
        <div class="card">
            <p id="navbarDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </p>
            <h6 class="card-subtitle mb-2 text-muted">資訊工程系</h6>

            <div class="card-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <input class="logout" type="button" value="登出">
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <!------------------------------學年度-------------------------------------->
        <div class="semester">
            <div class="sem_in">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="SEM1" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM1">大一上</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM2" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM2">大一下</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM3" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM3">大二上</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM4" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM4">大二下</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM5" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM5">大三上</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM6" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM6">大三下</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM7" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM7">大四上</label>

                    <input type="radio" class="btn-check" name="btnradio" id="SEM8" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="SEM8">大四下</label>
                </div>
                <input id="clear" type="button" value="清空課表">
            </div>
        </div>
        <!------------------------------學分-------------------------------------->
        <div class="typesetting">
            <div class="group">
                <div class="credit" id="required">
                    <div class="type">必修</div>
                </div>
                <div class="credit" id="PE">
                    <div class="type"> 體育<br>(<span id="selectedPE">0</span>/4)</div>
                </div>
                <div class="credit" id="general">
                    <div class="type">通識學分<br>(<span id="selectedgeneral">0</span>/14)</div>
                </div>
                <div class="credit" id="optional">
                    <div class="type">選修學分<br>(<span id="selectedoptional">0</span>/54)</div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------課程篩選-------------------------------------->
    <div class="lefbot">
        <div class="selgroup">
            <div class="lefbot_in">
                <div class="seldiv">
                    <select class="sel" id="sel" onchange="jsn()">
                        <option>系內課程</option>
                        <option>英文課程</option>
                        <option>語文課程</option>
                        <option>博雅課程</option>
                        <option>體育</option>
                    </select>
                    <select class="year" id="year" onchange="jsn()">
                        <option>全部</option>
                        <option>1A</option>
                        <option>1B</option>
                        <option>2A</option>
                        <option>2B</option>
                        <option>3A</option>
                        <option>3B</option>
                        <option>4A</option>
                        <option>4B</option>
                    </select>
                    <select class="typech" id="typech" onchange="jsn()">
                        <option>全部</option>
                        <option>必修</option>
                        <option>選修</option>
                    </select>
                </div>
            </div>

            <div class="seardiv">
                <label><span class="searword">課程搜尋</span>
                    <input id="myInput" class="search"></label>
            </div>

        </div>

        <div class="database">
            <div class="data_in">
                <table class="table table-success table-striped" id="classtable">
                    <tbody id="tablebody"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-------------------------------------------課表-------------------------------------->
    <div class="wrapper">
        <div class="arrows">
            <input type="button" id="left" value="&#x3008;" class="arrow">
        </div>
        <div id="numWrap" class="numWrap">
            <div id="strip" class="strip"></div>
        </div>
        <div class="arrows">
            <input type="button" id="right" value="&#x3009;" class="arrow">
        </div>
    </div>
    </div>
@endsection
