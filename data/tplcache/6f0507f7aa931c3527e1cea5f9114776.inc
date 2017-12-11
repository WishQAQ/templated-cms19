
                [field:pagestyle runphp='yes'] @me= (@me==3 ? '<li>' : '');[/field:pagestyle]
                <img src='[field:imgsrc/]' id='bigimg' [field:imgwidth /] alt='[field:alttext /]' border='0' onclick='dPlayNext()' style='cursor:pointer' />
                [field:pagestyle runphp='yes'] @me = (@me==3 ? '</li>' : ''); [/field:pagestyle]
             