<?php
/**
 * User: Fitz
 * Date: 2016/11/25
 * Time: 下午7:58
 */
return [
    /*
     * ========================================
     * 1***系
     * ========================================
     */
    '100005' => '',
    /*
     * ========================================
     * 2***系
     * ========================================
     */
    '200001' => ['status' => 401, 'msg' => '账号或密码不正确'],

    /*
     * ========================================
     * 3***系
     * ========================================
     */


    /*
    * ========================================
    * 4***系
    * ========================================
    */
    '400001' => ['status' => 404, 'msg' => '用户不存在'],
    '400002' => ['status' => 404, 'msg' => '令牌不存在'],
    '400003' => ['status' => 401, 'msg' => '验证码错误或失效'],
    '400004' => ['status' => 401, 'msg' => '密码错误'],
    '400005' => ['status' => 403, 'msg' => '无效操作'],
    '400006' => ['status' => 422, 'msg' => '创建失败'],
    '420001' => ['status' => 401, 'msg' => '令牌失效'],
    '420002' => ['status' => 401, 'msg' => '令牌无效'],
    /*
    * ========================================
    * 5***系
    * ========================================
    */
    '500001' => ['status' => 500, 'msg' => '数据错误'],
    '500002' => ['status' => 500, 'msg' => '创建Token失败'],
    '500003' => ['status' => 500, 'msg' => '令牌失效'],
    '500004' => ['status' => 500, 'msg' => '令牌无效'],
    '500005' => ['status' => 500, 'msg' => '令牌已被列入黑名单'],
    '500006' => ['status' => 500, 'msg' => '修改失败'],
    '500007' => ['status' => 500, 'msg' => '更新失败'],

    /*
    * ========================================
    * 6***系
    * ========================================
    */
    '666666' => ['status' => 520, 'msg' => '未知错误'],
];