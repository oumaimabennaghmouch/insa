

QUnit.test( "hello test", function( assert ) {
    assert.ok( 1 == "1", "Passed!" );
});

//Test des nbr pairs
QUnit.test("pair test", function(assert) {
    assert.expect(6); 
    assert.ok(pair(2), true, "pair");
    assert.notOk(pair(9), false, "impair");
    assert.ok(pair(2), true, "pair");
    assert.notOk(pair(7), false, "impair");
    assert.ok(pair(2), true, "pair");
    assert.notOk(pair(9), false, "impair");
});

//Test de concatenation
QUnit.test("concatene test", function(assert){
    assert.equal(concatene("coucou"), "Bonjour ,coucou", "Parfait!");
    assert.notEqual(concatene("je suis là"), "Bonjour ,je suis partie", "Erreur!");
});
