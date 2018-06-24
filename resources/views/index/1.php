 <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black " id="example-r">
                                 <thead>
                                    <tr>
                                     <th>视频编号</th>    
                                     <th>路径</th>                      
                                     <th>操作</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 @foreach ($res as $row)
                                    <tr class="gradeX">
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->v_path}}</td>
                                        <td>
                                            <div class="tpl-table-black-operation">
                            <a tt='{{$row->id}}' class="editor"><i class="am-icon-pencil"></i> 更改</a>
                            <a vl='{{$row->id}}' class="out"><i class="am-icon-trash"></i> 删除</a>
                                            </div>
                                        </td>
                                    </tr>
                                 @endforeach 
                                  <tr class="gradeX">
                                      <td></td>
                                      <td></td>
                                      <td>
                                        <div class="tpl-table-black-operation">
                                        <a class="add"><i class="am-icon-pencil"></i> 新增视频</a>
                                        </div>
                                      </td>
                                  </tr> 
                                 </tbody>
                       </table>