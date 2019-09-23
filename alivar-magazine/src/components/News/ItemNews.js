import React, {Component} from 'react';

class MenuBottom extends Component {
    constructor(props){
        super(props);
        
        this.state = {
           
        }
        this.showDetailNew =  this.showDetailNew.bind(this);
        
    }
    showDetailNew(item){
        this.props.clickItemNews();
        this.props.itemSelected(item);
    }


     render(){
        let listnews = this.props.news;
        let clickItemNews = this.props.clickItemNews;

        let item = this.props.news;

        return (
                
                <div className="col-xs-12" onClick = {() => this.showDetailNew(item)} >
                    <div>
                        <div className="item-new">
                            <div className="img-item">
                                <img src={listnews.img}/>
                            </div>
                            <div className="content-item">
                                <span className="type-new">
                                     {listnews.typenew} 
                                </span>
                                <span className="title-new">
                                    {listnews.titlenew} 
                                </span>
                                <span className="intro">
                                    {listnews.intro}
                                </span>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
        );
    }
}

export default MenuBottom;
