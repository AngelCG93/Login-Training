<?php
//------------------------------------------------------------------------------
// GET
function query_get($sql) {
  try {
    $db = getConnection();
    $result = $db->query($sql);
    $db = null;
    $object = $result->fetchAll(PDO::FETCH_OBJ);
    return $object;
  } catch(PDOException $e) {
    echo '{"error":"'.$e->getMessage().'"}';
    exit();
  }
};
//------------------------------------------------------------------------------
// POST
function query_post($sql) {
  try {
    $db = getConnection();
    $result = $db->query($sql);
    $lastInsertId = $db->lastInsertId();
    $db = null;
    return $lastInsertId;
  } catch(PDOException $e) {
    echo '{"error":"'.$e->getMessage().'"}';
    exit();
  }
};
//------------------------------------------------------------------------------
// PUT
function query_put($sql) {
  try {
    $db = getConnection();
    $result = $db->query($sql);
    $rowCount  = $result->rowCount();
    $db = null;
    return $rowCount;
  } catch(PDOException $e) {
    echo '{"error":"'.$e->getMessage().'"}';
    exit();
  }
};
//------------------------------------------------------------------------------
// DELETE
function query_delete($sql) {
  try {
    $db = getConnection();
    $result = $db->query($sql);
    $rowCount  = $result->rowCount();
    $db = null;
    return $rowCount;
  } catch(PDOException $e) {
    echo '{"error":"'.$e->getMessage().'"}';
    exit();
  }
};
//------------------------------------------------------------------------------
// EXTRAS
function obtain_posted_body() {
  $request = \Slim\Slim::getInstance()->request();
  $posted = json_decode($request->getBody());
  return $posted;
};
//------------------------------------------------------------------------------
?>
