import React, {Component} from 'react';
import News from './News/News';
import Tabs from './Tabs';

class MenuTop extends Component {
    constructor(props){
        super(props);

        this.state = {
           
        }
        
    }
     render(){

        let listnews = this.props.listnews;
        let isShowDetail = this.props.isShowDetail;
        let clickItemNews = this.props.clickItemNews;


        return (
             <div className="row">
                <div className="col-xs-12">
                    <div className="main-menu-top">
                        <Tabs>
                            <div label="Hot">
                                <News 
                                    listnews={listnews} 
                                    isShowDetail = {isShowDetail}
                                    clickItemNews = {clickItemNews}

                                    > 
                                </News>
                            </div>
                            <div label="Fashion">
                               Fashion
                            </div>
                            <div label="Beauty">
                                Beauty
                            </div>
                            <div label="Car">
                                Car
                            </div>
                            <div label="Travel">
                                Travel
                            </div>
                        </Tabs>

                        {/*<ul>
                            <li>
                                <a href="#"> Hot </a>
                            </li>
                            <li>
                                <a href="#"> Fashion </a>
                            </li>
                            <li>
                                <a href="#"> Beauty </a>
                            </li>
                            <li>
                                <a href="#"> Car </a>
                            </li>
                            <li>
                                <a href="#"> Travel </a>
                            </li>
                        </ul>*/}


                    </div>
                </div>
            </div>
        );
    }
}

export default MenuTop;
