
var HelloWorldLayer = cc.Layer.extend({
    sprite:null,
    ctor:function () {
        //////////////////////////////
        // 1. super init first
        this._super();

        // ウィンドウサイズの取得
        var size = cc.winSize;

        // add a "close" icon to exit the progress. it's an autorelease object
        var closeItem = new cc.MenuItemImage(
            res.CloseNormal_png,
            res.CloseSelected_png,
            function () {
                cc.log("Menu is clicked!");
            }, this);
        closeItem.attr({
            x: size.width - 40,
            y: 40,
            anchorX: 0.5,
            anchorY: 0.5
        });

        var menu = new cc.Menu(closeItem);
        menu.x = 10;
        menu.y = 10;
        this.addChild(menu, 1);

        /////////////////////////////
        // 3. add your codes below...
        // add a label shows "Hello World"
        // create and initialize a label
//        var helloLabel = new cc.LabelTTF("Hello World", "Arial", 38);
//        // position the label on the center of the screen
//        helloLabel.x = size.width / 2;
//        helloLabel.y = 0;
//        // add the label as a child to this layer
//        this.addChild(helloLabel, 5);

        // add "HelloWorld" splash screen"
//        this.sprite = new cc.Sprite(res.HelloWorld_png);
//        this.sprite.attr({
//            x: size.width / 2,
//            y: size.height / 2,
//            scale: 1,
//            rotation: 0
//        });
//        this.addChild(this.sprite, 0);

//        this.sprite.runAction(
//            cc.sequence(
//                cc.rotateTo(2, 0),
//                cc.scaleTo(2, 1, 1)
//            )
//        );
//        helloLabel.runAction(
//            cc.spawn(
//                cc.moveBy(2.5, cc.p(0, size.height - 40)),
//                cc.tintTo(2.5,255,125,0)
//            )
//        );
        return true;
    }
});

var HelloWorldScene = cc.Scene.extend({
    onEnter:function () {
        this._super();
        var layer = new HelloWorldLayer();
        this.addChild(layer);

        var touchSprite = new TouchableSprite();
        this.addChild(touchSprite);

//        var menu = new cc.Menu(removeAllTouchItem);
//        menu.setPosition(0, 0);
//        menu.setAnchorPoint(0, 0);
//        this.addChild(menu);
        //----end0----
    },

    title:function(){
        return "Touchable Sprite Test";
    },

    subtitle:function(){
        return "Please drag the blocks";
    }
});

var TouchableSprite = cc.Sprite.extend({
    onEnter:function() {
        this._super();
        /*--------------------
         * TouchEvent Test
         *--------------------*/

        // 描画領域の原点座標
        var origin  = cc.director.getVisibleOrigin();

        // 描画領域のサイズ
        var size    = cc.director.getVisibleSize();

        // Player
        var containerForPlayer = new cc.Node();
        var spritePlayer = new cc.Sprite(res.Img_Player_png);
        spritePlayer.setPosition(origin.x + size.width / 2, origin.y + size.height / 2);
        spritePlayer.setScale(0.25);
        containerForPlayer.addChild(spritePlayer);
        this.addChild(containerForPlayer, 1);

        // Playerタッチイベント
        var listenerPlayer = cc.EventListener.create({
            event: cc.EventListener.TOUCH_ONE_BY_ONE,
            swallowTouches: true,
            onTouchBegan: function (touch, event) {
                var target = event.getCurrentTarget();

                var locationInNode = target.convertToNodeSpace(touch.getLocation());
                var s = target.getContentSize();
                var rect = cc.rect(0, 0, s.width, s.height);

                if (cc.rectContainsPoint(rect, locationInNode)) {
                    cc.log("sprite began... x = " + locationInNode.x + ", y = " + locationInNode.y);
                    target.opacity = 180;
                    return true;
                }
                return false;
            },
            onTouchMoved: function (touch, event) {
                var target = event.getCurrentTarget();
                var delta = touch.getDelta();
                target.x += delta.x;
                target.y += delta.y;
            },
            onTouchEnded: function (touch, event) {
                var target = event.getCurrentTarget();
                cc.log("sprite onTouchesEnded.. ");
                target.setOpacity(255);
                containerForPlayer.setLocalZOrder(0);
            }
        });

        cc.eventManager.addListener(listenerPlayer, spritePlayer);
        var selfPointer = this;

        var containerForSupport1 = new cc.Node();
        var spriteSupport1 = new cc.Sprite(res.Img_Player_png);
        spriteSupport1.setPosition(cc.p(origin.x + size.width / 4, origin.y + size.height / 2));
//        spriteSupport1.setPosition(cc.p(100, 100));
        spriteSupport1.setScale(0.125);
        containerForSupport1.addChild(spriteSupport1);
        this.addChild(containerForSupport1, 1);

        cc.log(size.width);
        cc.log(size.width / 4);

        var controlPoints = [
            cc.p(size.width / 4, size.height / 2),
            cc.p(size.width / 2, size.height / 2 + size.height),
            cc.p(size.width - size.width / 4, size.height / 2)
        ];
        var bezierForward = cc.bezierTo(1, controlPoints);
        spriteSupport1.runAction(bezierForward);

        // BezierBy(対象の座標から相対座標で移動)
//        var controlPoints = [
//            cc.p(0, 0),
//            cc.p((size.width / 2), (size.height)),
//            cc.p((size.width / 4), (size.height / 2))
//        ];
//        var bezierForward = cc.bezierBy(1, controlPoints);
//        var repeat = cc.sequence(bezierForward, bezierForward.reverse()).repeatForever();
//        spriteSupport1.runAction(repeat);

//        // SpriteCyan
//        var containerForSpriteCyan = new cc.Node();
//        var spriteCyan = new cc.Sprite(res.Img_SquareCyan_png);
//        spriteCyan.setPosition(origin.x + size.width / 2 - 80, origin.y + size.height / 2 + 80);
//        containerForSpriteCyan.addChild(spriteCyan);
//        this.addChild(containerForSpriteCyan, 10);
//
//        // SpriteMagenta
//        var spriteMagenta = new cc.Sprite(res.Img_SquareMagenta_png);
//        spriteMagenta.setPosition(origin.x + size.width / 2, origin.y + size.height / 2);
//        this.addChild(spriteMagenta, 20);
//
//        // SpriteYellow
//        var spriteYellow = new cc.Sprite(res.Img_SquareYellow_png);
//        spriteYellow.setPosition(origin.x + size.width / 2 + 80, origin.y + size.height / 2 - 80);
////        sprite2.addChild(spriteYellow, 1);
//        this.addChild(spriteYellow, 1);
//
//        // Make spriteCyan touchable
//        var listenerCyan = cc.EventListener.create({
//            event: cc.EventListener.TOUCH_ONE_BY_ONE,
//            swallowTouches: true,
//            onTouchBegan: function (touch, event) {
//                var target = event.getCurrentTarget();
//
//                var locationInNode = target.convertToNodeSpace(touch.getLocation());
//                var s = target.getContentSize();
//                var rect = cc.rect(0, 0, s.width, s.height);
//
//                if (cc.rectContainsPoint(rect, locationInNode)) {
//                    cc.log("sprite began... x = " + locationInNode.x + ", y = " + locationInNode.y);
//                    target.opacity = 180;
//                    return true;
//                }
//                return false;
//            },
//            onTouchMoved: function (touch, event) {
//                var target = event.getCurrentTarget();
//                var delta = touch.getDelta();
//                target.x += delta.x;
//                target.y += delta.y;
//            },
//            onTouchEnded: function (touch, event) {
//                var target = event.getCurrentTarget();
//                cc.log("sprite onTouchesEnded.. ");
//                target.setOpacity(255);
//                if (target == spriteMagenta) {
//                    containerForSpriteCyan.setLocalZOrder(100);
//                } else if (target == spriteCyan) {
//                    containerForSpriteCyan.setLocalZOrder(0);
//                }
//            }
//        });
//
//        cc.eventManager.addListener(listenerCyan, spriteCyan);
//        cc.eventManager.addListener(listenerCyan.clone(), spriteMagenta);
//        cc.eventManager.addListener(listenerCyan.clone(), spriteYellow);
//        var selfPointer = this;

//        var removeAllTouchItem = new cc.MenuItemFont("Remove All Touch Listeners", function(senderItem){
//            senderItem.setString("Only Next item could be clicked");
//
//            cc.eventManager.removeListeners(cc.EventListener.TOUCH_ONE_BY_ONE);
//
//            var nextItem = new cc.MenuItemFont("Next", function(sender){
//                selfPointer.onNextCallback();
//            });
//
//            nextItem.fontSize = 16;
//            nextItem.x = cc.visibleRect.right.x -100;
//            nextItem.y = cc.visibleRect.right.y - 30;
//
//            var menu2 = new cc.Menu(nextItem);
//            menu2.setPosition(0, 0);
//            menu2.setAnchorPoint(0, 0);
//            selfPointer.addChild(menu2);
//        });
//
//        removeAllTouchItem.fontSize = 16;
//        removeAllTouchItem.x = cc.visibleRect.right.x -removeAllTouchItem.width/2-20;
//        removeAllTouchItem.y = cc.visibleRect.right.y;
    }
});

//TouchableSpriteTest.create = function(){
//    var test = new TouchableSpriteTest();
//    test.init();
//    return test;
//};
//
//var TouchableSprite = cc.Sprite.extend({
//    _listener:null,
//    _fixedPriority:0,
//    _removeListenerOnTouchEnded: false,
//
//    ctor: function(priority){
//        this._super();
//        this._fixedPriority = priority || 0;
//    },
//
//    setPriority:function(fixedPriority){
//        this._fixedPriority = fixedPriority;
//    },
//
//    onEnter:function(){
//        this._super();
//
//        var selfPointer = this;
//        var listener = cc.EventListener.create({
//            event: cc.EventListener.TOUCH_ONE_BY_ONE,
//            swallowTouches: true,
//            onTouchBegan: function (touch, event) {
//                var locationInNode = selfPointer.convertToNodeSpace(touch.getLocation());
//                var s = selfPointer.getContentSize();
//                var rect = cc.rect(0, 0, s.width, s.height);
//
//                if (cc.rectContainsPoint(rect, locationInNode)) {
//                    selfPointer.setColor(cc.color.RED);
//                    return true;
//                }
//                return false;
//            },
//            onTouchMoved: function (touch, event) {
//                //this.setPosition(this.getPosition() + touch.getDelta());
//            },
//            onTouchEnded: function (touch, event) {
//                selfPointer.setColor(cc.color.WHITE);
//                if(selfPointer._removeListenerOnTouchEnded) {
//                    cc.eventManager.removeListener(selfPointer._listener);
//                    selfPointer._listener = null;
//                }
//            }
//        });
//
//        if(this._fixedPriority != 0)
//            cc.eventManager.addListener(listener, this._fixedPriority);
//        else
//            cc.eventManager.addListener(listener, this);
//        this._listener = listener;
//    },
//
//    onExit: function(){
//        this._listener && cc.eventManager.removeListener(this._listener);
//        this._super();
//    },
//
//    removeListenerOnTouchEnded: function(toRemove){
//        this._removeListenerOnTouchEnded = toRemove;
//    },
//
//    getListener: function() {
//        return this._listener;
//    }
//});
