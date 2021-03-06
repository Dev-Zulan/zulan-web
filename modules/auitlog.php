<?php

function audit_log($SQL_Handle, $type, $description) {
    if($SQL_Statement = $SQL_Handle->prepare("INSERT INTO auditlog(auditlog_type, auditlog_description) VALUES(?, ?);")) {
    $SQL_Statement->bind_param('ss', $type, $description);
    $SQL_Statement->execute();
    } else {
        echo $SQL_Handle->error;
    }
}